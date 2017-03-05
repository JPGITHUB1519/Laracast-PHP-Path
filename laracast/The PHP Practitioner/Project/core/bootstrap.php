<?php
	/* FACTORY */
	/* Class to done all things that are made behind the scences */
	// update composer

	App::bind('config', require 'config.php');

	App::bind('database', new QueryBuilder(
			Connection::make(App::get('config')['database'])
		));

?>