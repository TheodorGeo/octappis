<?php



function redirect_to($RouteName, $params = []){	
	
	$routes = routes() ;

	$routesNames = get_all_names();

	if(in_array($RouteName, $routesNames)){

		foreach ($routes as $route) {

			if($route[4] == $RouteName){

				preg_match_all("/{(.*?)}/", $route[1] , $results);
				$uri_params = $results[0];

				$optional = false ;
				$required = false ;
				if(count($uri_params) == 0){
					header("Location: $route[1]");
				}else{
					$uri_paths = explode('/', $route[1]);
					$final_paths = [];
					foreach ($uri_paths as $path) {
						if ($path[0] == '{' && $path[1] !== '#') {
							$path = substr($path, 1, -1);
							$final_paths[$path][] = 'req';
							
						}elseif ($path[0] == '{' && $path[1] == '#') {
							$path = substr($path, 2, -1);
							$final_paths[$path][] = 'opt';
							$optional = true ;
						}else{
							$final_paths[$path][] = 'uri';
						}
					}

					$counter1 = 0;
					$counter2 = 0;
					
					$uri_array = [];
					if (isset($params[0]) || $optional) {
							foreach ($final_paths as $path => $stat) {
							if($stat[0] == 'uri'){
								$uri_array[] = $path;
								
							}elseif ($stat[0] == 'req'){
								$counter2++ ;
								if (isset($params[0])){
										if (array_key_exists($path, $params[0])){
										$uri_array[] = $params[0][$path];
										$counter1++ ;
										$required = true;

									}else{
										$uri_array[] = "qwer~tyqwerty~qwe~rty";
									}
								}else{
									$uri_array[] = "qwer~tyqwerty~qwe~rty";
								}
								
																				
							}elseif($stat[0] == 'opt'){
								if(isset($params[0])){
									if(array_key_exists($path, $params[0])) {
										$uri_array[] = $params[0][$path];
										$required = true;
										
									}else{
										$required = true;
									}
								}else{
									$required = true;
								}
								
							}else{
								$uri_array[] = " ";
								
							}
							
						}
					}

					
					$uri = implode('/', $uri_array);
					
					if($uri !== ''){

						if (Router::checkUri($route[1],$uri) && $required && $counter1 == $counter2) {
							header("Location: $uri");
						}else{
							echo "!!Please check the required parameters of this route";
							
						}
					}else{
						echo "Please check the required parameters of this route";
					}
					
				}
				exit();
			}
		}

	}

	echo 'There is not a route with the name ' . $RouteName ;

}




function get_all_names(){

	$routes = routes() ;

	$temp = [];

	foreach ($routes as $route) {
		if($route[4] !==''){
			$temp[] = $route[4];
		}
	}

	return $temp ;
}



function get_all_uris(){

	$temp = [];

	$routes = routes() ;
	
	foreach ($routes as $route) {
			
		$temp[] = $route[1];

	}

	return $temp ;
}

function routes(){

	return Route::$ROUTES;
	
}

