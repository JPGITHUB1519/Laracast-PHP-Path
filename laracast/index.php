<?php
	
	$query = require 'bootstrap.php';
	require 'Task.php';

	$tasks = $query->selectAll('todos');
	var_dump($tasks);
	// var_dump($tasks[0]->foo());
	require "index.view.php";

?>