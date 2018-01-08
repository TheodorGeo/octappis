<?php



use Octappis\Filter as Filter ;


class Request 
{

	public  $get_data = [] ;

	public  $post_data = [] ;

	public static $params = [] ;


	function __construct()
	{
		$this->get_data = $_GET;

		$this->post_data = $_POST;
	}


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
	
	public function params()
	{
		return self::$params;
		
	}

	public function param($key)
	{
		if (array_key_exists($key, self::$params)) {
			return self::$params[$key];
		}else{
			return false;
		}
	}

	public function get($key, $filter = 'default')
	{
		if (array_key_exists($key, $this->get_data)) {
			return Filter::$filter($this->get_data[$key]);
		}else{
			return false;
		}
	}

	public function get_multi(Array $array, $filter = 'default')
	{
		
		foreach ($array as $key) {
			if(isset($this->get_data[$key])){
				$data[$key] = Filter::$filter($this->get_data[$key]);
			}
		}

		if (isset($data)) {
			return $data;
		}else{
			return false;
		}
	}

	public function post($key, $filter = 'default')
	{
		if (array_key_exists($key, $this->post_data)) {
			return Filter::$filter($this->post_data[$key]);
		}else{
			return false;
		}
	}

	public function post_multi(Array $array, $filter = 'default')
	{
		
		foreach ($array as $key) {
			if(isset($this->post_data[$key])){
				$data[$key] = Filter::$filter($this->post_data[$key]);
			}
		}

		if (isset($data)) {
			return $data;
		}else{
			return false;
		}
	}
	
}


