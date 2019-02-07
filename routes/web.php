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
Route::post('reviews/{review}/favorites', 'FavoritesController@store');
Route::delete('reviews/{review}/favorites', 'FavoritesController@destroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/login/google/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/auth/google/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/crawler', 'PagesController@crawler');
