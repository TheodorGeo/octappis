<?php

$route->get('home','HomeController@index')->name('API_Home');

$route->get('/', 'HomeController@index');

$route->get('about','AboutController@index');

$route->post('form', 'HomeController@index')->name('apiPost');
