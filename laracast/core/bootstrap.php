<?php
	/* FACTORY */
	/* Class to done all things that are made behind the scences */
	
	$app = [];

	$app['config'] = require 'config.php';
	require 'core/Router.php';
	require 'core/Request.php';
	require 'core/database/Connection.php';
	require 'core/database/QueryBuilder.php';
	// CALLING STATIC METHOD
	// $query = new QueryBuilder(Connection::make());

	$app["database"] =  new QueryBuilder(
			Connection::make($app["config"]["database"])
		);

?>