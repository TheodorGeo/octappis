<?php

//Autoload Configuartion Files

$app = require '../config/app.php' ;




//Autoload Classes


require 'Http/Request.php';

require 'Http/Response.php';

require 'Routing/Router.php';

require 'Routing/Route.php';

require 'Http/Controllers/App.php';


$route = new Route;





//Autoload Routing

require '../routes/api.php';

require '../routes/web.php';




//var_dump($route->routes());


//Autoload Basic Helpers Functions

require 'Helpers/functions/views.helpers.php';

require 'Helpers/functions/routes.helpers.php';

require 'Helpers/Classes/Filter.php';




//Autoload Basic Errors Display

if ($app['errors_display'] == 'on'){
	require 'Errors/basic_errors_display.php';
}




//App Bootstrap Logic


Route::$ROUTES = $route->routes();

