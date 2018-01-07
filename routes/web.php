<?php


$route->get('/','ProfileController@show');

/*$route->get('home','HomeController@index')->directory('asds')->name('HomePage');*/

$route->get('about','AboutController@index')->name('AboutPage');

$route->post('about','AboutController@post')->name('PostPage');


$route->get('user/{id}/{#name}', 'UserController@index')->name('UserPage')->directory('users');

$route->get('home', 'AboutController@pass');


$route->get('test/2', 'TestController@index');


$route->get('home/user/about/{#test}', 'AboutController@index');
