<?php

namespace App\Http\Controllers;

use App\BookShelf;
use Illuminate\Http\Request;
use Redirect;

class BookShelfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'shelf' => 'required',
            'user_id' => 'required',
            'book_id' => 'required',
        ]);

        $book =  new BookShelf;
        $book->shelf = $request->input('shelf');
        $book->book_id = $request->input('book_id');
        $book->user_id = $request->input('user_id');
        $book->save();
        return redirect::back()->with('flash', 'این کتاب به قفسه‌ی شما افزوده شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookShelf  $bookShelf
     * @return \Illuminate\Http\Response
     */
    public function show(BookShelf $bookShelf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookShelf  $bookShelf
     * @return \Illuminate\Http\Response
     */
    public function edit(BookShelf $bookShelf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookShelf  $bookShelf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookShelf $bookShelf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookShelf  $bookShelf
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookShelf $bookShelf)
    {
        //
    }
}
