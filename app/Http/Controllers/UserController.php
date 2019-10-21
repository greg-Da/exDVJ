<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
	const VIEW = 'users.';

	public function destroy($id){
		$user = User::findOrFail($id);
		$user->delete();

		return redirect()->route('user.list');
	}

	public function add(Request $request){
		$users = new User();
		$users->username = $request['username'];
		$users->email = $request['email'];
		$users->password = bcrypt($request['password']);
		$users->save();

		return redirect()->route('user.list');
	}    

	public function show($user)
	{
		$user = User::find($user);

		return view('users.show',  ['user' => $user]);
	}

	public function list(){

		$users = User::all();

		return view(self::VIEW.'list', ['users' => $users]);
	}    
}
