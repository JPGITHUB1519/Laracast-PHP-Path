<?php

namespace App;

use Carbon\Carbon;

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

    // one to many relation to user
    public function user()
    {
        return $this->belongsTo(User::class);
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

    public function scopeFilter($query, $filters)
    {
        if($month = $filters['month'])
        {
            // converting string months to int month
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if($year = $filters['year'])
        {
            $query->whereYear('created_at', $year); 
        }
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname (created_at) month, count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) DESC')
            ->get()
            ->toArray();
    }

}
