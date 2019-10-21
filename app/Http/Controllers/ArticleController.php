<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;

class ArticleController extends Controller
{
    public function rand(){

		$articles = Article::all()->random(3);

		return view('home', ['articles' => $articles]);
	} 
}
