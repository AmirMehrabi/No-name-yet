<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/profile', 'PagesController@profile');

Route::get('/search', 'SearchController@show');

Route::view('scan', 'scan');


Route::get('book/show', function(){
  return view('book.show');
});
Route::get('book/search', 'BookController@search');
Route::resource('book', 'BookController');

Route::resource('review', 'ReviewController');
Route::patch('/review/{review}', 'ReviewController@update');

// Subscribe user to an specific review
Route::post('review/{review}/subscriptions', 'ReviewSubscriptionController@store')->middleware('auth');
Route::delete('review/{review}/subscriptions', 'ReviewSubscriptionController@destroy')->middleware('auth');

// User Notifications
Route::get('/profiles/{user}/notifications', 'UserNotificationsController@index');
Route::delete('/profiles/{user}/notifications/{notification}', 'UserNotificationsController@destroy');

// Profile Routes
// Route::resource('profile', 'ProfilesController');

Route::post('review/{review}/favorites', 'FavoritesController@store');
Route::delete('review/{review}/favorites', 'FavoritesController@destroy');

// Pagination of reviews in book page
Route::get('book/{book}/reviews', 'ReviewController@BookReviews');
Route::post('book/{book}/reviews', 'ReviewController@store');
// Managing book shelves
Route::post('book/{book}/user/{user}/shelf/store', 'BookShelfController@store')->name('shelf.addBook');


// Pagination of replies in review page
Route::get('review/{review}/replies', 'ReplyController@ReviewReplies');
Route::post('review/{review}/replies', 'ReplyController@store');


Route::resource('reply', 'ReplyController');
Route::patch('/reply/{reply}', 'ReplyController@update');
Route::post('/reply/{reply}/favorites', 'FavoritesController@storeReplyFavorite');
Route::delete('/reply/{reply}/favorites', 'FavoritesController@destroyReplyFavorite');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/login/google/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/auth/google/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/crawler', 'PagesController@crawler');

Route::get('/test/{id}', 'PagesController@test');


Route::get('/subscription', 'PagesController@subscription');

