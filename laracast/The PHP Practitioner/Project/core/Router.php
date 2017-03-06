<?php

	namespace App\Core;	

	class Router
	{
		// ROUTES SPECIFIC FOR GET AND POST
		public $routes = [
			'GET' => [],
			'POST' => []
		];

		public static function load($file)
		{
			// create an object of this class
			$router = new static;
			require $file;
			return $router;
		}
		
		// SET GET ROUTES
		public function get($uri, $controller)
		{
			$this->routes['GET'][$uri] = $controller; 
		}

		// SET POST ROUTES
		public function post($uri, $controller)
		{
			$this->routes['POST'][$uri] = $controller; 
		}

		// matching the url with the controller
		public function direct($uri, $request_type)
		{
			if(array_key_exists($uri, $this->routes[$request_type]))
			{
				$controller = explode('@', $this->routes[$request_type][$uri])[0];
				$action = explode('@', $this->routes[$request_type][$uri])[1];
				return $this->callAction($controller, $action);
			}

			throw new Exception('No routes define for this URI.');
		}

		// call action from controller
		public function callAction($controller, $action)
		{
			$controller = "App\\Controllers\\{$controller}";  
			$controller = new $controller;
			
			if(! method_exists($controller, $action))
			{
				throw new Exception(
					"{$controller} does not respond to the {$action}."
				);
			}
			return $controller->$action();
		}
	}

?>