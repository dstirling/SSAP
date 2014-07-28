<!DOCTYPE html>
<html>
<head><title>Sign Up</title>

<link href='http://fonts.googleapis.com/css?family=Crafty+Girls|Lobster|Shadows+Into+Light|Francois+One|Varela+Round|Indie+Flower|Alegreya|Pacifico|Architects+Daughter|Lobster+Two' rel='stylesheet' type='text/css'>
<link href="./styles/styles.css" type="text/css" rel="stylesheet" />

</head>
<body>
	<div class="container_log">
	

<?php 
	include 'includes/header.php';
	//include 'body.php';
	
	?>
<h2>Hello you beautiful human being, sign up for this shit</h2>
<!-- <div class="backimage">
<img src="./imgs/pageGears.png">
</div>

 -->

 <div id="signup">
 	<label for="fname">First Name: </label>
	<input type="text" id="fname" name="fname" />
	<br />
	 	<label for="lname">Last Name: </label>
	<input type="text" id="lname" name="lname" />
	<br />
	<label for="username">Username:</label>
	<input type="text" id="username" name="username" /><br />
	<label for="password">Password: </label>
	<input type="text" id="password" name="password" />
	<br />
	<label for="c_password">Confirm Password: </label>
	<input type="text" id="c_password" name="c_password" />
	<br />
	 	<label for="email">Email: </label>
	<input type="text" id="email" name="email" />
	<br />
	<label for="c_email">Confirm Email: </label>
	<input type="text" id="c_email" name="c_email" />
	<br />
    <input type="submit" id="submit" value="submit">
    <br />
    <br />	
</div>
</div>

<?php
include 'includes/footer.php';
?>

</body>

</html>