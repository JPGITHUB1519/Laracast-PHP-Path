<?php
	namespace App\Controllers;
	use App\Models\Task;
	use App\Core\Database\Connection;
	use App\Core\App;	

	class TaskController
	{

		public function index()
		{
			$task_model = new Task(Connection::make(App::get('config')['database']));
			$tasks = $task_model->getTasks();
			return view('task_index', compact('tasks'));
		}

		public function create()
		{
			return view('task_create');
		}

		public function store()
		{
			$task = new Task(Connection::make(App::get('config')['database']));
			$task->id = $_POST["id"];
			$task->title = $_POST["title"];
			$task->description = $_POST["description"];
			$task->status = $_POST["status"];
			$task->create();
			return redirect('todos');
		}
	}
?>