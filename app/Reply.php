<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];

    protected $appends = ['favoritesCount', 'isFavorited', 'modelName'];


    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function review()
    {
        return $this->belongsTo(Review::class, 'book_id');
    }

    public function getModelNameAttribute()
    {
        return 'reply';
    }

    public function favorites(){
        return $this->morphMany(Favorite::class, 'favorited');
      }
  
    public function favorite(){
        $attributes = ['user_id' => auth()->id()];
        if (! $this->favorites()->where($attributes)->exists()) {
            return $this->favorites()->create($attributes);
        }
    }

    public function unfavorite(){
        $attributes = ['user_id' => auth()->id()];
            return $this->favorites()->where($attributes)->delete();
        }

    public function isFavorited(){
        return $this->favorites()->where('user_id', auth()->id())->exists();
    }

    public function getIsFavoritedAttribute() {
        return $this->isFavorited();
    }

    public function getFavoritesCountAttribute(){
        return $this->favorites->count();
    }
  
  
}