<?php

namespace App\Tools;

class RuntimeCache {

	private static $data;

	public static function set($key, $value)
	{
		self::$data[$key] = $value;
	}

	public static function get($key, $default = '')
	{
		if( isset( self::$data[$key] ) )
		{
			return self::$data[$key];
		}

		return $default;
	}
	
	public static function exists($key)
	{
		if( isset( self::$data[$key] ) )
		{
			return true;
		}

		return false;
	}

	public static function all()
	{
		return self::$data;
	}
}