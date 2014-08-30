<?php

//class for getting user data, user ids, etc.
class User 
{
	private $_db, 
			$_data, 
			$_sessionName;

	public function __construct($user = null) 
	{
		$this->_db = DB::getInstance(); //get current instance of db (or create new one -- see db class, getinstance method)
		
		$this->_sessionName = Config::get('session/session_name');
	}

	//create a new account
	public function create($fields = array())
	{
		if(!$this->_db->insert('users', $fields)) //if this insert DOESN'T work...
		{
			throw new Exception('There was a problem creating an account <br />');
		}
	}

	public function find($user = null) // by username or id
	{
		if($user)
		{
			$field = (is_numeric($user)) ? 'users_id' : 'users_username';
			$data = $this->_db->get('users', array($field, '=', $user));

			if($data->count())
			{
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	}

	public function login($username = null, $password = null)
	{
		$user = $this->find($username);
		//print_r($this->_data);

		if($user)
		{
			if($this->data()->users_password === Hash::make($password, $this->data()->users_salt ))
			{
				Session::put($this->_sessionName, $this->data()->users_id);
				return true;	
			}

		}
		return false;
	}

	private function data()
	{
		return $this->_data;
	}
}