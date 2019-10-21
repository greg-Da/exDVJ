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

Route::view('ethan', 'ethan');

Route::view('joel', 'joel');

Route::get('users/', 'UserController@list')->name('user.list');

Route::delete('users/{id}/','UserController@destroy')->name('user.destroy');

Route::get('movies/', 'MovieController@list')->name('moves.list');