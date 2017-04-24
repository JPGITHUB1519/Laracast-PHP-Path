<?php

namespace App;

class Tag extends Model
{
    // many to many relation withs posts
    public function posts()
    {
    	return $this->belongsToMany(Post::Class);
    }

    // In route model binding filter by name rather than the id
    public function getRouteKeyName()
    {
    	return 'name';
    }
}
