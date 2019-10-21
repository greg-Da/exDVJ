<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;

class MovieController extends Controller
{
	
	public function list(){

		$movies = \App\Movie::all();

		return view('movie.list', ['movies' => $movies]);
	}  

	public function show($movie)
	{
		$movie = Movie::find($movie);

		return view('movie.show',  ['movie' => $movie]);
	}
}
