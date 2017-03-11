<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();
	    return view('tasks/index', [
	    		'tasks' => $tasks
	    	]);
    }

    // route model binding
    // same that task::find($id), it looks for automatically
    public function show(Task $task)
    {
    	// $task = Task::find($id);
	    return view('tasks/show', [
	    		'task' => $task
	    	]);
    }
}
