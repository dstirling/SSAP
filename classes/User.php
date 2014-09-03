<?php

//class for getting user data, user ids, etc.
class User 
{
	private $_db, 
			$_data, 
			$_sessionName, 
			$_cookieName,
			$_isLoggedIn;

	public function __construct($user = null) 
	{
		$this->_db = DB::getInstance(); //get current instance of db (or create new one -- see db class, getinstance method)
		
		$this->_sessionName = Config::get('session/session_name');
		$this->_cookieName = Config::get('remember/cookie_name');

		if(!$user) 
		{
			if(Session::exists($this->_sessionName))
			{
				$user = Session::get($this->_sessionName);
				//echo 'ID for this sessions user is: ' . $user . '<br />';

				if($this->find($user))
				{
					$this->_isLoggedIn = true;
				}
				else
				{
					//logout
				}
			}
		}
		else 
		{
			$this->find($user);
		}
	}

	//create a new account
	public function create($fields = array())
	{
		if(!$this->_db->insert('users', $fields)) //if this insert DOESN'T work...
		{
			throw new Exception('There was a problem creating an account <br />');
		}
	}

	//update the account
	public function update($fields = array(), $id = null)
	{	
		if(!$id && $this->isLoggedIn()) //if there's no id passed in (because null is default)...   
		{
			$id = $this->data()->users_id; // ... then make the $id equal to the id of the logged in user (from this instance of the user object)
		}

		if($this->_db->update('users', $id, $fields))
		{
			throw new Exception('There was a problem updating.');
		}//bug here.  if statement should have ! 
	}

	public function find($user = null) // by username or id
	{
		if($user)
		{
			$field = (is_numeric($user)) ? 'users_id' : 'users_username';  //determines by username or by id
			$data = $this->_db->get('users', array($field, '=', $user));  //query done here, and results stored in $data

			if($data->count())
			{
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	}

	public function login($username = null, $password = null, $remember = false)
	{
		if(!$username && !$password && $this->exists()) //cookie remember scenario: no username, no password, but there is a user object....
		{
			Session::put($this->_sessionName, $this->_data->users_id);
		}
		else
		{
			$user = $this->find($username);
			
			if($user)
			{
				if($this->data()->users_password === Hash::make($password, $this->data()->users_salt ))
				{
					Session::put($this->_sessionName, $this->data()->users_id);
				
					if($remember)
					{
						//if the user wants to be remembered...
						$hash = Hash::unique();
						$hashCheck = $this->_db->get('sessions', array('sessions_userid', '=', $this->data()->users_id)); // check to see if there's already a hash stored in the sessions table.  we're checking for a match in the sessions_userid for the current User object's id (users_id)
					
						if(!$hashCheck->count()) // if there are no results
						{
							$this->_db->insert('sessions', array( // insert this hash for this id into the sessions table
								'sessions_userid' => $this->data()->users_id, 
								'sessions_hash' => $hash
								));
						}
						else 
						{
							$hash = $hashCheck->first()->hash; // if there ARE results, then use the hash from the sessions table as the current hash.
						}

						Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));
					}
					return true;	
				}
			}
		
		}		
		return false;

	}

	public function hasPermission($key)
	{
		$group = $this->_db->get('groups', array('groups_id', '=', $this->data()->users_group));
		if($group->count())
		{
			$permissions = json_decode($group->first()->groups_permissions, true);

			if($permissions[$key] == true) //$key would be something like "admin"
			{
				return true;
			}
		}
		return false;
	}

	public function exists()
	{
		return(!empty($this->_data)) ? true : false;
	}

	public function logout()
	{
		$this->_db->delete('sessions', array('sessions_userid', '=', $this->data()->users_id));
		Session::delete($this->_sessionName);
		Cookie::delete($this->_cookieName);
	}

	public function data() 
	{
		return $this->_data;
	}

	public function isLoggedIn()
	{
		return $this->_isLoggedIn;
	}
}