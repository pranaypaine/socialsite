<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
User controller to manage all stuff related to user
**/
class UserController extends Controller
{

	public function postSignUp(Request $request)
	{
		$first_name = $request['first_name'];
		$last_name = $request['last_name'];
		$email = $request['email'];
		$password = bcrypt($request['password']);

		$user = new User();
		$user->firstname = $first_name;
		$user->lastname = $last_name;
		$user->email = $email;
		$user->password = $password;

		$user->save();

		//Auth::login($user);

		return redirect()->route('home');
	}

	public function postLogin(Request $request)
	{
		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
		{
			return redirect()->route('home');
		}
		else
		{
			return redirect()->back();
		}
	}
	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('index');
	}
	public function getUserProfile($user_id)
    {
    	return view('profile');
    }
}

?>