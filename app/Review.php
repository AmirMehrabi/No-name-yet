<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    protected $appends = ['favoritesCount', 'isFavorited', 'modelName', 'isSubscribedTo', 'ownerName', 'replies'];


    public function owner()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function book()
    {
      return $this->belongsTo(Book::class, 'book_id');
    }


    public function replies()
    {
      return $this->hasMany(Reply::class);
    }


    public function getModelNameAttribute()
    {
        return 'review';
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


    public function getOwnerNameAttribute() {
      return $this->owner->name;
  }

  public function getRepliesAttribute() {
    return $this->replies();
}

    public function subscribe(){
      $this->subscriptions()->create([
        'user_id' => auth()->id()
      ]);

      return $this;
    }

    public function unsubscribe(){
      $this->subscriptions()->where('user_id', auth()->id())->delete();
    }

    public function subscriptions(){
      return $this->hasMany(ReviewSubscription::class);
    }

    public function getIsSubscribedToAttribute(){
      return $this->subscriptions()->where('user_id', auth()->id())->exists();
    }
    



}
