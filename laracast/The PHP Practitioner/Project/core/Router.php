<?php

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
				return $this->routes[$request_type][$uri];
			}

			throw new Exception('No routes define for this URI.');
		}
	}

?>