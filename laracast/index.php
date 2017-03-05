<?php
	
	$database = require 'core/bootstrap.php';
	$router = new Router;

	require 'routes.php';

	// trim -> quit / on left and right
	var_dump($app);
	require Router::load('routes.php')->direct(Request::uri());

?>