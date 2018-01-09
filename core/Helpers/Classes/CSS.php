<?php



class CSS 
{
	
	public static function link($name, $extension = 'css')
	{

		$path = "assets/css/$name.$extension" ;

		return $path;
	}


}


