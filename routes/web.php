<?php


$route->get('/','ProfileController@show');

$route->get('about','AboutController@index')->name('AboutPage');

$route->post('about','AboutController@post')->name('PostPage');


$route->get('user', 'UserController@index')->name('UserPage')->directory('users');

$route->get('home', 'AboutController@pass');