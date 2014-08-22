<?php
class DB 
{	//using the singleton pattern

	private static $_instance = null;
	//will store instance of the database (if available).  if not, we'll instantiate it and store it here.  
	
	//create properties
	private $_pdo, //pdo object 
			$_query, //last query executed
			$_error = false, //is there an error
			$_results, //results set (from the query)
			$_count = 0; //are there results returned

	//structure of the DB object
	private function __construct() 
	{
		try 
		{
			$this->_pdo = new PDO('mysql:host=' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));
			// pdo('type:host=hostname;dbname=databasename', 'username', 'password')
			echo 'DB is connected<br />'; 

		}
		catch(PDOException $e) 
		{
			echo 'DB connection problem: ';
			die($e->getMessage());
		}
	}

	//gets the instance of the db connection object
	public static function getInstance()
	{
		if(!isset(self::$_instance)) //check to see if the db connection object exists
		{
			self::$_instance = new DB(); //if it doesn't exist, create a new db object
		}
		return self::$_instance; // return the db object
	}

	//query
	public function query($sql, $params = array()) //$sql is the broad sql statement.  $params is an array of the query terms.  
	{
		$this->_error = false; //resets the error... so that we don't get the error value of the previous query.
		if($this->_query = $this->_pdo->prepare($sql)) //if the query provided from the parameters can be successfully prepared...
		{
			$x = 1;
			if(count($params)) // find out how many parameters there are
			{
				foreach($params as $param)  //cycle through the parameters
				{
					$this->_query->bindValue($x, $param); //bind them according to its index.  1 will be param1, 2 will be param2
					$x++;
				}
			}
			if($this->_query->execute()) //if the query is executed successfully...
			{
				echo 'Query is valid and executable<br />';
				$this->_results	= $this->_query->fetchAll(PDO::FETCH_OBJ); //get the results set
				$this->_count = $this->_query->rowCount(); //get the number of results
			}
			else
			{
				$this->_error = true;
				echo 'Query ran into a problem<br />';
			}
		}
		return $this; //returns the object with any properties it has been assigned (like results, error, count)
	}

	public function queryBuilder($action, $table, $where = array())// this can (and maybe should) be private.  won't be used anywhere other than db
	{
		if(count($where) === 3) // the $where array must have 3 items because we need "WHERE username(#1) =(#2) will(#3)".  Anything less and the query is incomplete.
		{
			$goodOperators = array('=', '<', '>', '>=', '<=');  // we're defining possible acceptable operations here.  Can add more if the need arises.
			$column = $where[0]; // these three will come from the $where array.  
			$operator = $where[1];
			$value = $where[2];
 
			if(in_array($operator, $goodOperators)) //we're making sure $operator is one of the $goodOperators
			{
				$sql = "{$action} FROM {$table} WHERE {$column} {$operator} ?";
				if(!$this->query($sql, array($value))->error()) //make sure this query does not make an error.  query function above.
				{
					return $this; //returns the entire object if no errors  
				}
			}
		}
		return false; //COME BACK TO REVIEW THIS
	}
	
	public function get($table, $where) 
	{
		return $this->queryBuilder('SELECT *', $table, $where);
	}

	public function delete($table, $where)
	{
		return $this->queryBuilder('DELETE', $table, $where);
	}

	public function error() 
	{
		return $this->_error;
	}

	public function count()
	{
		return $this->_count;
	}
} 

	// 1. getInstance() is called.  
	// 2. checks if $_instance is set.  
	// 3a. If yes, $_instance is returned (no need to reconnect)
	// 3b. If no, then line 18 (create the pdo connection object using data in init file), and then return $_instance.  