<?php

$route->get('home','HomeController@index')->name('API_Home');

$route->get('/', 'HomeController@index');


