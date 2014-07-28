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
<h2>Hello you beautiful human being, write your reviews!</h2>
<label for="username">Your Username:</label>
<input type="text" id="username" name="username"><br />

<label for="project_name">Project Name:</label>
<input type="text" id="project_name" name="project_name">
<br />

<label for="date">Date:</label>
<input type="text" id="date" name="date">
<br />
<label for="peer_name">Peer Name: </label>
<input type="text" id="peer_name" name="peer_name">
<br />
<label for="peer_role">Peer Role: </label>
<input type="text" id="peer_role" name="peer_role">
<br />
<label for="feature_dev">Feature(s) Developed </label>
<input type="text" id="feature_dev" name="feature_dev">
<br />
<label for="strength">Strengths: </label>
<input type="text" id="strength" name="strength">
<br />
<label for="improve">Improvements: </label>
<input type="text" id="improve" name="improve">
<br />
<label for="review">General Review: </label>
<input type="text" id="review" name="review" text-mode="multiline" rows="8" placeholder="please provide any additional information, what it was like working with this individual etc in here" >
<br />
<label for="future">Future Aspirations:</label>
<input type="text" id="future" name="future" placeholder="if this is a self review please fill out this field">
<br />
<input type="submit" id="submit" name="submit" value="submit" />
</div>


<?php
include 'includes/footer.php';
?>

</body>

</html>