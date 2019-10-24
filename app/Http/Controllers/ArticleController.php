<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;
use \App\Movie;

class ArticleController extends Controller
{
    public function rand(){

		$articles = Article::all()->random(3);

		$movie = Movie::all()->random(9);
		return view('home', [
			'articles' => $articles,
			'movie' => $movie
		]);
	} 
}
