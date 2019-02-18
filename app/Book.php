<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['user_id', 'title', 'image_src', 'author', 'translator', 'isbn', 'publisher', 'number_of_pages', 'description', 'publication_year'];

    protected $appends = [ 'averageRate', 'shelf'];

    public function reviews()
    {
      return $this->hasMany(Review::class);
    }

    public function bookShelf()
    {
      return $this->hasMany(BookShelf::class);
    }

    public function getAverageRateAttribute(){
      return round($this->bookShelf()->avg('rate'), 1);
    }

    public function getShelfAttribute() {
      if(auth()->user()) {
        return $this->bookShelf()->where('user_id', auth()->user()->id)->where('book_id', $this->id)->first();
      }
      else {
        return ;
      }
      
    }
}
