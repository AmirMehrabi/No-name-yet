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

Route::get('/', function () {
    return view('home');
});

Route::get('book/show', function(){
  return view('book.show');
});

Route::resource('book', 'BookController');

Route::resource('review', 'ReviewController');
Route::patch('/review/{review}', 'ReviewController@update');
Route::post('review/{review}/favorites', 'FavoritesController@store');
Route::delete('review/{review}/favorites', 'FavoritesController@destroy');


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
