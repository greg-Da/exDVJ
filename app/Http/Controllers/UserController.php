<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Validator;

class UserController extends Controller
{
	const VIEW = 'users.';

	public function destroy($id){
		$user = User::findOrFail($id);
		$user->delete();

		return redirect()->route('user.list');
	}

	public function add(Request $request){

		$validator = Validator::make($request->all(), [
            'username' => 'required|unique:users|between:5,20',
            'email' => 'required|unique:users|email',
            'password' => 'required|max:100'
        ]);
 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

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
