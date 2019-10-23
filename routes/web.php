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



Route::get('/', 'ArticleController@rand')->name('home');

Route::view('signup', 'signup')->name('signup');

Route::view('ethan', 'ethan')->name('ethan');

Route::view('joel', 'joel')->name('joel');

Route::delete('users/{id}/','UserController@destroy')->name('user.destroy');

Route::get('movies/', 'MovieController@list')->name('movie.list');

Route::get('movies/{movie}/', 'MovieController@show');

Route::post('signup', ['as' => 'signup', 'uses' => 'UserController@add']);

Route::get('users/profile', 'UserController@profile')->name('users.profile');

Route::post('comments', ['as' => 'movies', 'uses' => 'CommentController@store'])->name('comments.store');

Auth::routes();

Route::get('users/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');
