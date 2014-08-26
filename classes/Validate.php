<?php

class Validate {
	private $_passed = false, //we're assuming it hasn't passed by default
	$_errors = array(), 
	$_db = null;

	public function __construct()
	{
		$this->_db = DB::getInstance();
	}

	public function check($source, $items = array())//source is either get/post
	{
		foreach($items as $item => $rules) //rules is the restrictions that we put on the various fields (like required, min, max)
		{
			foreach($rules as $rule => $rule_value) 
			{
				//echo "{$item} {$rule} must be {$rule_value}<br />";
				$value = $source[$item];
				
				//echo $value, '<br />';
				if($rule === 'required' && empty($value)) 
				{
					$this->addError("{$item} is required");

				}
				else if(!empty($value))
				{
					switch($rule) 
					{
						case 'min':
							if(strlen($value) < $rule_value) 
							{
								$this->addError("{$item} must be a minimum of {$rule_value} characters.");
							}
						break;
					
						case 'max':
							if(strlen($value) > $rule_value)
							{
								$this->addError("{$item} must have fewer than {$rule_value} characters.");
							}
						break;

						case 'matches':
							if($value != $source[$rule_value])//note we're using source.  source is the post/get.  
							{
								$this->addError("Values must match {$rule_value} : {$item}");
							}
						break;

						case 'unique':
							$check = $this->_db->get($rule_value, array('users_'.$item, '=', $value));//users_ is the suffix for the table names
							if($check->count())
							{
								$this->addError("{$item} already exists.");
							}
						break;


					}
				}
			}

		}
		if(empty($this->_errors))
		{
			$this->_passed = true;
		}
		return $this;
	}

	private function addError($error)
	{
		$this->_errors[] = $error;
	}

	public function errors()
	{
		return $this->_errors;
	}

	public function passed()
	{
		return $this->_passed;
	}
}
