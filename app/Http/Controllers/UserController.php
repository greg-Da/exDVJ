<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
	const VIEW = 'users.';

	public function destroy($id,Request $request){
		$user = User::findOrFail($id);
		$user->delete();

		return redirect()->route('user.list');
	}

	public function list(){

		$users = User::all();

		return view(self::VIEW.'list', ['users' => $users]);
	}    
}
