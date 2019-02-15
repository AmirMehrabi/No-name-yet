<?php

namespace App\Http\Controllers;

use App\ReviewSubscription;
use App\Review;
use Illuminate\Http\Request;

class ReviewSubscriptionController extends Controller
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
    public function store(Review $review)
    {

        $review->subscribe();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReviewSubscription  $reviewSubscription
     * @return \Illuminate\Http\Response
     */
    public function show(ReviewSubscription $reviewSubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReviewSubscription  $reviewSubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(ReviewSubscription $reviewSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReviewSubscription  $reviewSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReviewSubscription $reviewSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReviewSubscription  $reviewSubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->unsubscribe();
    }
}