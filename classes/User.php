<?php

//class for getting user data, user ids, etc.
class User 
{
	private $_db;

	public function __construct($user = null) 
	{
		$this->_db = DB::getInstance(); //get current instance of db (or create new one -- see db class, getinstance method)
	}

	//create a new account
	public function create($fields = array())
	{
		if(!$this->_db->insert('users', $fields)) //if this insert DOESN'T work...
		{
			throw new Exception('There was a problem creating an account <br />');
		}
	}
}