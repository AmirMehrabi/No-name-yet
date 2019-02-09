<?php

namespace App\Http\Controllers;

use App\Review;
use App\Reply;
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

    public function destroy(Review $review){
      $review->unfavorite();
    }



    public function storeReplyFavorite(Reply $reply){
      // $reply->favorite();
      // return back();
      Favorite::create([
        'user_id' => auth()->id(),
        'favorited_id' => $reply->id,
        'favorited_type' => get_class($reply)
      ]);
      
    }

    public function destroyReplyFavorite(Reply $reply){
      $reply->unfavorite();
    }
}
