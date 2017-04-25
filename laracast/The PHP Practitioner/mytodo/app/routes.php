<?php
	$router->get('', 'PagesController@home');
	$router->get('about', 'PagesController@about');
	$router->get('contact', 'PagesController@contact');
	$router->post('names', 'controllers/add-name.php');
	$router->get('users', 'UsersController@index');
	$router->post('users', 'UsersController@store');

	// todos controllers
	$router->get('todos', 'TaskController@index');
	$router->get('todos/create', 'TaskController@create');
	$router->post('todos/store', 'TaskController@store');
?>