<?php
//load the core/init file
require_once 'core/init.php'; // this contains database, cookie, session configuration info, and also loads required classes/functions.


//echo Config::get('mysql/host'); //should return 127.0.0.1 (defined in core init file)
// note: don't have to require classes/Config.php because core init registers it for you.
//var_dump(Config::get('mysql/host')); 

//DB::getInstance(); //gets the database connection.  
//test DB::getInstance(); by changing values in coreinit file, like username

$user = DB::getInstance()->query("SELECT users_username FROM users WHERE users_username = ?", array('alex'));

if($user->error())
{
	echo 'There is an error';
}
else 
{
	echo 'There is no error';
}

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