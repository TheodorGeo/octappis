<?php


$route->get('/','ProfileController@show');

/*$route->get('home','HomeController@index')->directory('asds')->name('HomePage');*/

$route->get('about','AboutController@index')->name('AboutPage');

$route->post('about','AboutController@post')->name('PostPage');
