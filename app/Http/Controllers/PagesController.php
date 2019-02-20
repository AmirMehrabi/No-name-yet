<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use App\Book;
use App\BookShelf;
use App\Review;
use App\Notifications\ReviewWasUpdated;
use Response;
use Intervention\Image\ImageManagerStatic as Image;

class PagesController extends Controller
{
    public function addBook()
    {
        return view('book.add');
    }

    public function profile() {
        return view('profile.index');
    }

    public function search() {
        return view('search.index');
    }

    public function test($id) {
        $book = Book::findOrFail($id);

        $shelf = BookShelf::all()->avg('rate');

        dd($shelf);
    }

    public function crawler()
    { 
        $starttime = microtime(true);
        $client = new Client();
        for ($i = 213; $i < 250; $i++) {
            if ($i == 1) {
                $crawler = $client->request('GET', 'https://www.banasher.com/books/search?');
            } else {
                $crawler = $client->request('GET', 'https://www.banasher.com/books/search?page=' . $i);
            }
            $client->getResponse();

            $crawler->filter('div.column.is-2-desktop.is-4-tablet.is-6-mobile.book')->each(function ($node) use (&$rss) {
                if (!isset($node)) {
                    return;
                }
                $img = $node->filterXPath('//img')->attr('src');
                $img_replaced = str_replace('localhost', 'banasher.com', $img);
                $title = $node->filterXPath('//h1')->text();
                $writer = $node->filterXPath('//h3')->text();
                $link = $node->filterXPath('//a')->attr('href');

                // Start of crawler for each book


                // End of crawler for each book

                $arr = [];
                $arr['title'] = $title;
                $arr['writer'] = $writer;
                $arr['image'] = $img;
                $arr['category'] = null;
                $arr['publisher'] = null;
                $arr['category'] = null;
                $arr['ISBN'] = null;
                $arr['page_number'] = null;
                $arr['translator'] = null;
                $arr['description'] = null; // Do

                if ($img == "https://www.banasher.com/images/placeholders/book.jpeg") {
                    $arr['image'] = null;
                } else {
                    $arr['image'] = "https://www.banasher.com/".$img_replaced;
                }

                $arr['link'] = $link;
                $rss[] = $arr;
            });
        }
        $books = $rss;

        foreach ($books as  &$book) {
            $client = new Client();
            $book_crawler = $client->request('GET', $book['link']);

            $book_crawler->filter('div.content.book-data ul li')->each(function ($node) use (&$book) {
                if (strpos($node->text(), 'شابک') !== false) {
                    $book['ISBN'] = trim(preg_replace('/\s+/', ' ', implode(" ", explode('شابک:', $node->text()))));
                } elseif (strpos($node->text(), 'تعداد صفحه') !== false) {
                    $book['page_number'] = trim(implode(" ", explode('تعداد صفحه:', $node->text())));
                }
            });


            $book_crawler->filter('div.content.book-data h6')->each(function ($node) use (&$book) {
                if (str_contains($node->text(), 'ناشر') !== false) {
                    $book['publisher'] = trim(implode(" ", explode('ناشر:', $node->text())));
                //echo $book['publisher'];
                } elseif (str_contains($node->text(), 'دسته بندی') !== false) {
                    $book['category'] = trim(preg_replace('/\s+/', ' ', implode(" ", explode('دسته بندی:', $node->text()))));
                }
            });
            $book_crawler->filter('h5.book-translators ul li')->each(function ($node) use (&$book) {
                $book['translator'] = trim(implode(" ", explode('مترجمان:', $node->text())));
                //echo $book['translator'];
            });
            $book_crawler->filter('div.content p')->each(function ($node) use (&$book) {
                $book['description'] = trim($node->text());
                //echo $book['description'];
            });


            // Create a new book

            $new_book = new Book();
            $new_book->user_id = 1;
            $new_book->title = $book['title'];
            $new_book->translator = $book['translator'];
            $new_book->description = $book['description'];
            $new_book->category = $book['category'];
            $new_book->author = $book['writer'];
            $new_book->number_of_pages = $book['page_number'];
            $new_book->isbn = $book['ISBN'];
            $new_book->publisher = $book['publisher'];
            //$new_book->image_src = $book['image'];

            if (!is_null($book['image'])) {
                $path = $book['image'];
                $filename = basename($path);
                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $image_name = 'images/books/' . $new_book->id . "-" . time() . "book." . $extension;
                Image::make($path)->save(public_path($image_name));
                $new_book->image_src = $image_name;
                echo "not null!!";
            }
            $new_book->save();
            echo date('h:i:s') . "<br>";
            echo "Book no. ". $new_book->id . " created." . "<br>";
            usleep( 450000 );
            echo date('h:i:s') . "<br>";
        }

        $endtime = microtime(true); // Bottom of page
        printf("Page loaded in %f seconds", $endtime - $starttime);
    }


    public function subscription(){
        $review = Review::first();

        foreach($review->subscriptions as $subscription) {
            $subscription->user->notify(new ReviewWasUpdated($review, $reply));
        }

        return $review;
    }
}
