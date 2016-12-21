<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
		if ($request['postcontent'])
		{
			$post = new Post();
			$post->post = $request['postcontent'];
			$request->user()->posts()->save($post);

			return redirect()->route('home');
		}
		else
		{
			return redirect()->route('home')->with(['message' => 'Post cannot be blank' ]);
		}

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