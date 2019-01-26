<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['user_id', 'title', 'image_src', 'author', 'translator', 'isbn', 'publisher', 'number_of_pages', 'description', 'publication_year'];
}
