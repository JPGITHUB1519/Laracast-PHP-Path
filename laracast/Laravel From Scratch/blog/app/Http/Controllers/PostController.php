<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	return view('posts/index');
    }

    public function show($post)
    {
    	return view('posts/show');
    }

    public function create()
    {
    	return view('posts/create');
    }

    public function store()
    {
    	// view request data
    	// dd(request()->all());

    	// view one specific data
    	// dd(request('title')); 

    	// view many specifics data
    	// dd(request(['title', 'body']));

    	// create a new post from the request data
    	// $post = new Post;
    	// $post->title = request('title');
    	// $post->body = request('body');
    	// // save to the database
    	// $post->save(); 
    	// // and then redirect to the homepage

    	// refactored way
    	POST::create([
    			'title' => request('title'),
    			'body' => request('body')
    		]);
    	return redirect('/');

    }
}
