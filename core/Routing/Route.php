<?php 

class Route 
{

	public $routes = [] ;

	public $i = -1;

	public  function get($uri, $callback)
	{
		$requiredFiles = get_required_files();

		$routesFrom = substr(end($requiredFiles), -7);

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
		
		

		return $this ;

	}

	public  function post($uri, $callback)
	{

		$requiredFiles = get_required_files();

		$routesFrom = substr(end($requiredFiles), -7);

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

	public function get_all_names()
	{

		$temp = [];

		foreach ($this->routes as $route) {
			if($route[4] !==''){
				$temp[] = $route[4];
			}
		}

		return $temp ;
	}

	public function get_all_uris()
	{
		$temp = [];

		foreach ($this->routes as $route) {
			
			$temp[] = $route[1];

		}

		return $temp ;
	}

}