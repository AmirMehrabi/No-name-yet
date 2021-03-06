<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewSubscription extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function review() {
        return $this->belongsTo(Review::class);
    }
}
