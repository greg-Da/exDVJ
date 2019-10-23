<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;
use \App\Comment;

class MovieController extends Controller
{
	
	public function list(){

		$movies = \App\Movie::all();

		return view('movie.list', ['movies' => $movies]);
	}  

	public function show($param)
	{
		$movie = Movie::findOrFail($param);

		$comments = $movie->comments();

		dd($comments);

		return view('movie.show', [
			'movie' => $movie,
			'comments' => $comments
		]);
	}
}
