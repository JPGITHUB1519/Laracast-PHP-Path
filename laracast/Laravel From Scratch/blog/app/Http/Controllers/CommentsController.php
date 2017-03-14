<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
    	// validation
    	$this->validate(request(), ['body' => 'required|min:2']);
    	// add comment
    	$post->addComment(request('body'));

    	return back();
    }
}
