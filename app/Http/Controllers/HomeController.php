<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\BookShelf;
use App\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // Get the books that user is currently reading:
        $currently_reading = BookShelf::where('user_id', $user->id)->where('shelf', 1)->orderBy('created_at', 'desc')->take(1)->get();

        // Co-readers:
        if(count($currently_reading)) {
            $coreaders = BookShelf::where('book_id', $currently_reading[0]->book_id)->where('shelf', 1)->pluck('user_id')->all();
        }
        else {
            $coreaders = new BookShelf;
        }

        
        // Random books:
        $random_books = Book::inRandomOrder()->take(5)->get();

        return view('index', compact('user', 'currently_reading', 'random_books', 'coreaders'));
    }
}
