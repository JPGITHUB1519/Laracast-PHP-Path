<?php
		

	use App\Core\App;
		
	/* FACTORY */
	/* Class to done all things that are made behind the scences */
	// update composer

	App::bind('config', require 'config.php');

	App::bind('database', new QueryBuilder(
			Connection::make(App::get('config')['database'])
		));

	function view($name, $data=[])
	{
		// extract variables from file
		extract($data);
		// the view will have access to that data
		return require "app/views/{$name}.view.php";
	}

	function redirect($path)
	{
		header("Location: /{$path}");
	}

?>