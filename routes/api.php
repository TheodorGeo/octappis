<?php

$route->get('home/{#id}','HomeController@index')->name('API_Home')->directory('api');

$route->get('/', 'HomeController@index');

$route->get('about','AboutController@index');

$route->post('form/{id}/{num}/{#name}', 'HomeController@index')->name('apiPost')->name('asds');


$route->get('tete', 'HomeController@index');

$route->get('test/{#id}', function($req){
	echo "test callback function ". $req->param('id');
});
