<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // returns a query
    // with this form we can say task->incomplete()->get;
    // or task->incomplete()->where('id',1)..
    // scope<methodName>
    public function scopeIncomplete($query)
    {
    	return $query->where('completed', 0);
    }
}
