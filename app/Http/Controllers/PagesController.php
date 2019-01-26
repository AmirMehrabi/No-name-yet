<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function addBook()
    {
        return view('book.add');
    }
}
