<?php
/* Parent Model */
namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
	//  te permite especificar qué campos sí quieres que se guarden en la base de datos.
	    // protected $fillable = ['title', 'body'];

    // $guarded permite especificar qué campos no queremos que se asignen al modelo
    protected $guarded = [];
}
