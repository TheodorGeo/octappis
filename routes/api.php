<?php

$route->get('home/{#id}','HomeController@index')->name('API_Home')->directory('api');

$route->get('/', 'HomeController@index');

$route->get('about','AboutController@index');

$route->post('form', 'HomeController@index')->name('apiPost')->name('asds');


$route->get('tete', 'HomeController@index');