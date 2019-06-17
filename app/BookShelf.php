<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookShelf extends Model
{
    public $guarded = [];

    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function book()
    {
        return $this->hasOne('App\Book')->withDefault(function () {
            return new Book();
        });;
    }
}
