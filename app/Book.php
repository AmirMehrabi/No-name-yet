<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Book extends Model
{
    use Searchable;
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

    public function readers()
    {
      return $this->belongsToMany(user::class, 'book_shelves');
    }
    

    public function getAverageRateAttribute(){
      return round($this->bookShelf()->avg('rate'), 1);
    }

    public function getShelfAttribute() {
      if(auth()->user()) {
        return $this->bookShelf()->where('user_id', auth()->user()->id)->where('book_id', $this->id)->orderBy('created_at', 'desc')->first();
      }
      else {
        return ;
      }
      
    }
}
