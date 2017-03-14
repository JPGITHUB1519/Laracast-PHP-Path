<?php

namespace App;

// now using parent model
// use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //  te permite especificar qué campos sí quieres que se guarden en la base de datos.
    // protected $fillable = ['title', 'body'];

    // $guarded permite especificar qué campos no queremos que se asignen al modelo

	// one to many relation, get models 
    public function comments()
    {
    						 // same that 'App\Comment'
    	return $this->hasMany(Comment::class);
    }

    // add comment method

    public function addComment($body)
    {
    	// long way

    	// Comment::create([
    	// 		'body' => $body,
    	// 		'post_id' => $this->id

    	// 	]);

    	// short way

    	// it give the id behind the scenes
    	$this->comments()->create(compact('body'));
    }

}
