<?php 

class Route 
{

	static $ROUTES = [];

	public $routes = [] ;

	public $i = -1;

	public  function get($uri, $callback)
	{
		$routesFrom = $this->routesPath();

		$this->i ++;

		if ($routesFrom == "api.php") {

			if ($uri == '/' || $uri == "") {

				$this->routes[$this->i][1] = 'api';

			}else{

				$this->routes[$this->i][1] = "api/".$uri;

			}
		}else{

			if ($uri == '/') {

			$this->routes[$this->i][1] = '';

			}else{

				$this->routes[$this->i][1] = $uri;

			}
		}
		$this->routes[$this->i][0] = 'GET';

		$var = explode('Controller@', $callback);
		
		$this->routes[$this->i][2] = $var[0];

		$this->routes[$this->i][3] = $var[1];

		$this->routes[$this->i][4] = '';
		
		$this->routes[$this->i][5] = $var[0];

		return $this ;

	}

	public  function post($uri, $callback)
	{

		$routesFrom = $this->routesPath();

		$this->i ++;

		if ($routesFrom == "api.php") {
			
			if ($uri == '/' || $uri == "") {

				$this->routes[$this->i][1] = 'api';

			}else{

				$this->routes[$this->i][1] = "api/".$uri;

			}
		}else{
			if ($uri == '/') {

			$this->routes[$this->i][1] = '';

			}else{

				$this->routes[$this->i][1] = $uri;

			}
		}

		$this->routes[$this->i][0] = 'POST';

		$var = explode('Controller@', $callback);
		
		$this->routes[$this->i][2] = $var[0];

		$this->routes[$this->i][3] = $var[1];

		$this->routes[$this->i][4] = '';
		
		$this->routes[$this->i][5] = $var[0];

		return $this ;
	}


	public function routes()
	{
		return $this->routes;
	}


	public function name($name)
	{
		$this->routes[$this->i][4] = $name;

		return $this ;
	}

	protected function routesPath()
	{

		$requiredFiles = get_required_files();

		$routesFrom = substr(end($requiredFiles), -7);

		return $routesFrom ;
	}

	public function directory($dir)
	{

		$this->routes[$this->i][5] = $dir . "/" . $this->routes[$this->i][2] ;

		return $this;

	}
	
}