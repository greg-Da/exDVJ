<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
	
	public function list(){

		$movies = \App\Movie::all();

		return view('movielist', ['movies' => $movies]);
	}     
}
