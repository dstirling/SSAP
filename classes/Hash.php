<?php

class Hash 
{
	//make a hash
	public static function make($string, $salt='') 
	{
		return hash('sha256', $string . $salt); //concat the pw and salt, and hash it using sha256
	}

	//create a salt
	public static function salt($length)
	{
		return mcrypt_create_iv($length); //create a random string of characters of a certain length.
	}

	public static function unique()
	{
		return self::make(uniqid());
	}
}