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


//HOME
Route::get('/', 'ArticleController@rand')->name('home');

//COEN BROTHER
Route::view('ethan', 'ethan')->name('ethan');

Route::view('joel', 'joel')->name('joel');


//USERS
Route::delete('users/{id}/','UserController@destroy')->name('user.destroy');

Route::post('signup', ['as' => 'signup', 'uses' => 'UserController@add']);


//MOVIES
Route::get('movies/', 'MovieController@list')->name('movie.list');

Route::get('movies/{movie}/', 'MovieController@show');


//COMMENTS
Route::post('comments', ['as' => 'movies', 'uses' => 'CommentController@store'])->name('comments.store');

//AUTH
Auth::routes();

//ADMIN
Route::get('users/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');
