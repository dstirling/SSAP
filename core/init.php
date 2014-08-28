<?php 
//this file will be included on every page we create.

//create a new session
session_start();

//define the (global) values for mysql, remember, session. ??
// mysql array will hold host, username, password, dbname
// remember array will hold cookie name, expiry
// session array will hold the session name 
$GLOBALS['config'] = array(
	'mysql' => array(  //localhost settings
		'host' => '127.0.0.1', 
		'username' => 'root', 
		'password' => '',
		'db' => 'ssap'
	),
	'remember' => array(  //cookie names, expiry
		'cookie_name' => 'hash', 
		'cookie_expiry' => 604800 //in seconds.  604800 is a week.  86400 is a day.  3600 is an hour.
	), 
	'session' => array(  //session name, tokens?
		'session_name' => 'user',
		'token_name' => 'token' // for combating xss/csrf
	), 
);


//add required class files
// require_once 'classes/Config.php';
// require_once 'classes/Cookie.php';
// require_once 'classes/DB.php';
// require_once 'classes/Hash.php';

//instead of requiring an exhaustive list of classes, as started above, we can use the standard php library (spl) autoload.
spl_autoload_register(function($class){
	require_once 'classes/' . $class . '.php';
	//so, if $db = new DB(); is called below...
	// spl_autoload_register will create the require_once 'classes/DB.php'; line of code
}); //LATER ON... DELETE THE ABOVE FUNCTION AND SEE WHAT HAPPENS

//add required function files
require_once 'functions/sanitize.php';

?>