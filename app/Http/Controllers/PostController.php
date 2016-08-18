<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


/**
User controller to manage all stuff related to user
**/
class PostController extends Controller
{
	public function getHome()
	{
		$posts = Post::orderBy('created_at', 'DESC')->get();
		return view('home', ['posts' => $posts]);
	}

	public function postCreatePost(Request $request)
	{
		$post = new Post();
		$post->post = $request['postcontent'];
		$request->user()->posts()->save($post);

		return redirect()->route('home');
	}

	public function getDeletePost($post_id)
	{
		$post = Post::where('id', $post_id)->first();
		if (Auth::user() != $post->user)
		{
			return redirect()->back();
		}
		$post->delete();
		return redirect()->route('home')->with(['message' => 'successfully Deleted']);
	}
}

?>