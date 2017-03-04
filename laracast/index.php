<?php
	require 'functions.php';
	class Task
	{
		// attributes
		public $description;
		public $completed = False;

		// constructor
		public function __construct($description)
		{
			$this->description = $description;
		}

		public function isCompleted()
		{
			return $this->completed;
		}

		public function complete()
		{
			$this->completed = True;
		}

	}

	// $task = new Task("Do My Homework");
	// $task->complete();
	// var_dump($task->iscompleted());

	// arrays of tasks
	$tasks = [
		new Task("Go to Store"),
		new Task("Play Video Games"),
		new Task("Do my Homework")
	];

	$tasks[0]->complete();

	require "index.view.php";

?>