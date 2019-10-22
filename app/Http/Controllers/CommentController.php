<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Comment;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$request->validate([
            'body'=>'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        Comment::create($input);

        return back();
    }

    public function show(Request $request)
    {
        $comments = $request->input('movie');
        return $comments;

    }

}