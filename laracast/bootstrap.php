<?php
	/* FACTORY */
	/* Class to done all things that are made behind the scences */
	$config = require 'config.php';
	require 'database/Connection.php';
	require 'database/QueryBuilder.php';
	// CALLING STATIC METHOD
	// $query = new QueryBuilder(Connection::make());

	return new QueryBuilder(
			Connection::make($config["database"])
		);

?>