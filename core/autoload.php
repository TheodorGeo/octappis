<?php

//Autoload Configuartion Files

$app = require '../config/app.php' ;




//Autoload Basic Classes

require 'Http/Controllers/App.php';

require 'Http/Request.php';

require 'Http/Response.php';

require 'Routing/Router.php';

require 'Routing/Route.php';




$route = new Route;





//Autoload Routing

require '../routes/api.php';

require '../routes/web.php';





//Autoload Basic Helpers Functions & Classes

require 'Helpers/functions/autoload.php';

require 'Helpers/Classes/autoload.php';





//Autoload Basic Errors Display

if ($app['errors_display'] == 'on'){
	require 'Errors/basic_errors_display.php';
}




//App Bootstrap Logic


Route::$ROUTES = $route->routes();

