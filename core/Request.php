<?php

class Request
{

	public static function uri()
	{
		

		$url_server = $_SERVER['REQUEST_URI'];

		if (strpos($url_server, '?')) {

			$uri_temp = strstr($url_server, '?' , true);

			$uri = trim($uri_temp, '/');

		}else{

			$uri = trim($url_server, '/');

		}

		return $uri;

	}


	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
	
}