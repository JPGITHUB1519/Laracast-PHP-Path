<?php
	
	namespace App\Core;	
		
	class Request
	{
		/* getting the url request */
		public static function uri()
		{
			// getting only the path uri not the parameters like url?par=1
			return trim(
					parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
				);
		}

		/* getting the request method get, post ..*/
		public static function method()
		{
			return $_SERVER['REQUEST_METHOD']; 
		}
	}
?>