<?php

namespace App;

// delete this for

// Cannot use Illuminate\Database\Eloquent\Model as Model because the name is already in use
// use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // one to many relation, get post
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
