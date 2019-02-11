<?php

namespace App\Http\Controllers;

use App\Reply;
use Redirect;
use App\Review;
use App\Notifications\ReviewWasUpdated;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reply = new Reply();
        $reply->user_id = auth()->id();
        $reply->review_id = $request->review_id;
        $reply->body = $request->body;
        $reply->save();
        $review = Review::where('id', $request->review_id)->first();

        foreach($review->subscriptions as $subscription) {
            if($subscription->user_id != $reply->user_id ) {
                $subscription->user->notify(new ReviewWasUpdated($review, $reply));

            }
        }

        return $reply;
    }

    public function ReviewReplies(Review $review) {

        return Reply::where('review_id', $review->id)->with(['favorites', 'review'])->latest()->paginate(10);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(Reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $reply)
    {
        //
    }
}
