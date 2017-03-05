<?php
	
	// load composer
	require 'vendor/autoload.php';
	require 'core/bootstrap.php';
	$router = new Router;

	require 'routes.php';

	// requiring the file matched the url controller
	require Router::load('routes.php')
			->direct(Request::uri(), Request::method());

?>