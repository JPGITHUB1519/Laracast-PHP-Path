<?php

namespace App;

class Tag extends Model
{
    // many to many relation withs posts
    public function posts()
    {
    	return $this->belongsToMany(Post::Class);
    }
}
