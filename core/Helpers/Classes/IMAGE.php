<?php


class IMAGE
{

	public static function src($name, $extension = "jpg")
	{

		$path = "assets/images/$name.$extension" ;

		return $path;

	}

}