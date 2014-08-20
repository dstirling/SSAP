<?php
//load the core/init file
require_once 'core/init.php'; // this contains database, cookie, session configuration info, and also loads required classes/functions.

echo Config::get('mysql/host'); //should return 127.0.0.1 (defined in core init file)
//var_dump(Config::get('mysql/host')); 


<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Crafty+Girls|Lobster|Shadows+Into+Light|Francois+One|Varela+Round|Indie+Flower|Alegreya|Pacifico|Architects+Daughter|Lobster+Two' rel='stylesheet' type='text/css'>

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