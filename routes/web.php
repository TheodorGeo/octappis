<?php


$route->get('/','ProfileController@show');

/*$route->get('home','HomeController@index')->directory('asds')->name('HomePage');*/

$route->get('about/{id}','AboutController@index');

$route->post('about','AboutController@post')->name('PostPage');


$route->get('user/{id}/{#name}', 'UserController@index')->name('UserPage')->directory('users');

$route->get('home', 'TestController@index');


$route->get('test/{id}/{name}/{#num}', 'TestController@index')->name('AboutPage');


$route->get('{user}/{id}/test/{num}/{#date}', 'TestController@index')->name('TETETE');



