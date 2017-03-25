<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Post;

use App\Repositories\Posts;


use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct()
    {
        // Need Login Except
        $this->middleware('auth')->except(['index', 'show']);
    }

    // we can pass to the controller the repositories class
    public function index(Posts $posts)
    {
        // $posts = Post::latest()
        //     ->filter(request(['month', 'year']))
        //     ->get();
        // dd($posts);
        $posts = $posts->all();
        return view('posts/index', compact('posts'));
    }

    public function show(Post $post)
    {
    	return view('posts/show', compact('post'));
    }

    public function create()
    {
    	return view('posts/create');
    }

    public function store()
    {
    	// validation
    	$this->validate(request(), [
    			'title' => 'required',
    			'body' => 'required'
    		]);

    	auth()->user()->publish(
                new Post(request(['title', 'body']))
        );
    	return redirect('/');
    }
}
