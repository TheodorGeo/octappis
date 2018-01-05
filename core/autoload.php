<?php

//Autoload Configuartion Files

$app = require '../config/app.php' ;




//Autoload Classes

require 'Request.php';

require 'Routing/Router.php';

require 'Routing/Route.php';

require 'Http/Controllers/App.php';


$route = new Route;





//Autoload Routing

require '../routes/api.php';

require '../routes/web.php';






//Autoload Basic Helpers Functions

require 'Helpers/views.helpers.php';

require 'Helpers/routes.helpers.php';



//Autoload Basic Errors Display

if ($app['errors_display'] == 'on'){
	require 'Errors/basic_errors_display.php';
}




//App Bootstrap Logic

$GLOBALS['routes'] = $route->routes();



