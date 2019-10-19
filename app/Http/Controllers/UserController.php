<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

	public function delete(){
		
	}

	public function list(){

		$users = \App\User::all();

		return view('userlist', ['users' => $users]);
	}    
}
