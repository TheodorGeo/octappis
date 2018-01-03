<?php

class Router
{


	public static function direct($routes)
	{

		$method = Request::method();

		$uri = Request::uri();

		$results = false;
		
		foreach ($routes as $route) {

			if ($route[0] == $method && $route[1] == $uri) {

				$controllerPath = "../app/Controllers/$route[2]Controller.php";

				$controllerName = $route[2]."Controller";

				$methodName = $route[3];

				$results = true;
			}
		}

		if ($results) {

			require $controllerPath;

			$test = new $controllerName();

			$test->$methodName();

		}else{

			$app = require '/../../config/app.php';

			if($app['404_page'] == 'init'){

				return view('404');

			}else{

				return view($app['404_page']);

			}
			
			
		}
		
	}

}