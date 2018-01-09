<?php



class JS 
{
	
	public static function script($name, $extension = 'js')
	{

		$path = "assets/js/$name.$extension" ;

		return $path;
	}


}


