<?php
class Config {
	public static function get($path = null) {
		if($path) {
			$config = $GLOBALS['config']; //remember, this is automatically created/required in the core/init file
			$path = explode('/', $path); //divides the string into an array whenever an "/" is encountered

			foreach($path as $p) {
				if(isset($config[$p])) {
					//echo $p . ' SET';
					$config = $config[$p];
				}
			}
			//print_r($path);
			return $config;
			//returns the value of whatever the path has requested.
			//note.  if the path is completely invalid, this will return the entire $GLOBALS['config'] array, as assigned in line 5
		}
		return "config get might be missing a parameter"; //only fires if the path is blank
	}
}