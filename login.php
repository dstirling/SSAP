<!DOCTYPE html>
<html>
<head><title>Log In</title>

<link href='http://fonts.googleapis.com/css?family=Crafty+Girls|Lobster|Shadows+Into+Light|Francois+One|Varela+Round|Indie+Flower|Alegreya|Pacifico|Architects+Daughter|Lobster+Two' rel='stylesheet' type='text/css'>
<link href="./styles/styles.css" type="text/css" rel="stylesheet" />

</head>
<body>
	<div class="container_log">
	

<?php 
	include 'includes/header.php';
	//include 'body.php';
	
	?>
<h2>Hello you beautiful human being, log on this shit</h2>
<!-- <div class="backimage">
<img src="./imgs/pageGears.png">
</div>
 -->
<div id="logon">
	<label for="username">Username:</label>
	<input type="text" id="username" name="username" /><br />
	<label for="password">Password: </label>
	<input type="text" id="password" name="password" />
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