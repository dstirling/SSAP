<?php
//load the core/init file
require_once 'core/init.php'; // this contains database, cookie, session configuration info, and also loads required classes/functions.

if(Session::exists('home'))
{
	echo Session::flash('home');

}
//echo Config::get('mysql/host'); //should return 127.0.0.1 (defined in core init file)
// note: don't have to require classes/Config.php because core init registers it for you.
//var_dump(Config::get('mysql/host')); 

//DB::getInstance(); //gets the database connection.  
//test DB::getInstance(); by changing values in coreinit file, like username

//this is the traditional way of doing queries.  
//$user = DB::getInstance()->query("SELECT users_username FROM users WHERE users_username = ?", array('alex'));

//how about we try making a better query builder?
//$user = DB::getInstance()->get('users', array('users_id', '>', '0' ));
//$user = DB::getInstance()->get('users', array('users_group', '=', '1' ));//test.
//$user = DB::getInstance()->get('users', array('users_username', '=', 'Grimlockfdsajfp' ));//test
// this will translate the parameters in the get method into a query that says SELECT users_username FROM users WHERE users_username = will
// allows us to skip writing full queries.  

//insert example
// $userInsert = DB::getInstance()->insert('users', array(
// 	'users_username' => 'mickeymouse',
// 	'users_password' => 'qwerty', 
// 	'users_salt' => 'salt',
// 	'users_firstname' => 'Mickey', 
// 	'users_lastname' => 'Mouse', 
// 	'users_joined' => '',
// 	'users_group' => '2'
// 	));

//$userUpdate = DB::getInstance()->update('users', 6, array(
	//'users_username' => 'modestmouse',
	// 'users_password' => 'qwerty',
	// 'users_salt' => 'salt', 
	//'users_firstname' => 'Modest'//,
	// 'users_lastname' => 'Mouse', 
	// 'users_joined' => '', 
	// 'users_group' => '2'
	//));


// if(!$user->count())
// {
// 	echo 'There are no results';
// }
// else 
// {
// 	echo 'There are this many results: ' . $user->count(), '<br /><br />';
// 	// foreach($user->results() as $user) 
// 	// {
// 	// 	echo 'Username: ' . $user->users_username . '<br />', 
// 	// 		 'Firstname: ' . $user->users_firstname . '<br />',
// 	// 		 'Lastname: ' . $user->users_lastname . '<br /><br />';
// 	// }
// 	//echo $user->results()[0]->users_username;
// 	echo $user->first()->users_username;
// }


?>


<!DOCTYPE html>
<html>
<head>
 
	<link href="./styles/styles.css" type="text/css" rel="stylesheet" />
	<?php 



	 ?>
</head>
<body>
	<div class="container">
	

<?php 
	include 'includes/header_landing.php';
	include 'includes/body_landing.php';
	?>


</div>
<?php
include 'includes/footer_landing.php';
?>
</body>
</html>