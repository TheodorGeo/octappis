<?php

// view function use in controllers for view the page

function view($name, $data=''){
	$path = "/../../../resources/views/$name.view.php";
	require $path;

}

 

//function link_to for generating urls

function link_to($url){
	return $url ;
}

