<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;
use \App\Comment;

class MovieController extends Controller
{
	
	//get all movies
	public function list(){

		$movies = \App\Movie::all();

		return view('movie.list', ['movies' => $movies]);
	}  

	// show one movie and comments
	public function show($param)
	{
		$movie = Movie::findOrFail($param);

		$comments = $movie->comments;
		
		return view('movie.show', [
			'movie' => $movie,
			'comments' => $comments
		]);
	}
}
