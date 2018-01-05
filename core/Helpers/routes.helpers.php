<?php



function redirect_to($RouteName){	
	
	$routes = $GLOBALS['routes'] ;

	$routesNames = get_all_names();

	if(in_array($RouteName, $routesNames)){

		foreach ($routes as $route) {

			if($route[4] == $RouteName){

				header("Location: $route[1]?page=12");

				exit();
			}
		}

	}

	echo 'There is not a route with the name ' . $RouteName ;

}




function get_all_names(){

	$routes = $GLOBALS['routes'] ;

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

	$routes = $GLOBALS['routes'] ;
	
	foreach ($routes as $route) {
			
		$temp[] = $route[1];

	}

	return $temp ;
}