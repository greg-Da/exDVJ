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



Route::view('/', 'home');

Route::get('userlist', 'UserController@list')->name('user.list');

Route::get('movies', 'MovieController@list');

Route::delete('users/:id','UserController@destroy')->name('user.destroy');