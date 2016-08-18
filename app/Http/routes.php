<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    if (Auth::user())
	{
    	return view('home');
	}
	return view('index');
    
})->name('index');

Route::post('/signup', [
	'uses' => 'UserController@postSignUp',
	'as' => 'signup'
]);

Route::post('/login', [
	'uses' => 'UserController@postLogin',
	'as' => 'login'
]);
Route::get('/logout', [
	'uses' => 'UserController@getLogout',
	'as' => 'logout'
]);

Route::get('/profile/{user_id}', function () {
    if (Auth::user())
	{
    	return view('profile');
	}
	return view('index');
})->name('profile');

Route::get('/home', [
	'uses' => 'PostController@getHome',
	'as' => 'home',
	'middleware' => 'auth'
]);

Route::post('/createpost', [
	'uses' => 'PostController@postCreatePost',
	'as' => "createpost"
]);

Route::get('/post/delete/{post_id}',[
	'uses' => 'PostController@getDeletePost',
	'as' => 'post.delete',
	'middleware' => 'auth'
]);
