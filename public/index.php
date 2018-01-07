<?php

require '../core/autoload.php';


Router::direct($route->routes());

echo(Request::uri());





