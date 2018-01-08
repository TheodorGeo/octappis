<?php

namespace Octappis;

class Filter
{
	public static function default($string)
	{
		return filter_var($string, FILTER_SANITIZE_EMAIL);
	}

	public static function int($string)
	{
		return filter_var($string, FILTER_SANITIZE_NUMBER_INT);
	}

	public static function float($string)
	{
		return filter_var($string, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
	}

	public static function raw($string)
	{
		return $string;
	}

	public static function rm_html($string)
	{
		return htmlspecialchars($string , ENT_COMPAT);
	}
}