<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

	public function destroy($id,Request $request){
		$user = User::findOrFail($id);
		$user->delete();
	}

	public function list(){

		$users = \App\User::all();

		return view('userlist', ['users' => $users]);
	}    
}
