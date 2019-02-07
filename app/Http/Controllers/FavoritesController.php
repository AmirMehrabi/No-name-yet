<?php

namespace App\Http\Controllers;

use App\Review;
use App\Favorite;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{

    public function __construct(){
    $this->middleware('auth');
    }

    public function store(Review $review){
      $review->favorite();
      return back();
      // Favorite::create([
      //   'user_id' => auth()->id(),
      //   'favorited_id' => $review->id,
      //   'favorited_type' => get_class($review)
      // ]);
    }
}
