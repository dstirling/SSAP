<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Crafty+Girls|Lobster|Shadows+Into+Light|Francois+One|Varela+Round|Indie+Flower|Alegreya|Pacifico|Architects+Daughter|Lobster+Two' rel='stylesheet' type='text/css'>
	<link href="./styles/styles.css" type="text/css" rel="stylesheet" />
	
</head>
<body>
	<div class="container_log">
	<?php require_once 'includes/header.php' ?>
	<h2>Register</h2>
<img src="./imgs/pageGears.png">
	<form id="register" name="register" action="">
		<h3>Experience</h3>
		<fieldset>
			<legend>General</legend>
		<label for="name"> Name:</label><br />
		<input id="name" name="name" type="text">
		<br />
		<label for="city"> City:</label><br />
		<input id="city" name="city" type="text">
		<br />
		<label for="email"> Preferred E-mail:</label><br />
		<input id="email" name="email" type="email" placeholder="email you want to use for project communication" size="42">
		<br />
		</fieldset>
		<fieldset id="languages" width="400px">
			<legend>Languages</legend>
		<label for="asp.net"> asp.net:</label>
		<br />
		<input id="asp.net" name="asp.net" type="radio" value="none">None
		<input id="asp.net" name="asp.net" type="radio" value="1-6 months">1-6 months
		<input id="asp.net" name="asp.net" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="asp.net" name="asp.net" type="radio" value="1-2 years">1-2 years
		<input id="asp.net" name="asp.net" type="radio" value="2-3 years">2-3 years
		<input id="asp.net" name="asp.net" type="radio" value="4+ years">4+ years
		<br />
		<input id="nowork" name="nowork" type="radio" value="nowork">I do not want to work in this language
<br />
<br />
		<label for="c#"> C#:</label>
		<br />
		<input id="c#" name="c#" type="radio" value="none">None
		<input id="c#" name="c#" type="radio" value="1-6 months">1-6 months
		<input id="c#" name="c#" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="c#" name="c#" type="radio" value="1-2 years">1-2 years
		<input id="c#" name="c#" type="radio" value="2-3 years">2-3 years
		<input id="c#" name="c#" type="radio" value="4+ years">4+ years
		<br />
		<input id="nowork" name="nowork" type="radio" value="nowork">I do not want to work in this language<br />
<br />
		<label for="visualbasic"> VB:</label>
<br />
		<input id="visualbasic" name="visualbasic" type="radio" value="none">None
		<input id="visualbasic" name="visualbasic" type="radio" value="1-6 months">1-6 months
		<input id="visualbasic" name="visualbasic" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="visualbasic" name="visualbasic" type="radio" value="1-2 years">1-2 years
		<input id="visualbasic" name="visualbasic" type="radio" value="2-3 years">2-3 years
		<input id="visualbasic" name="visualbasic" type="radio" value="4+ years">4+ years
		<br />
		<input id="nowork" name="nowork" type="radio" value="nowork">I do not want to work in this language
<br />	
<br />	
		<label for="xhtml"> Xhtml:</label>
		<br />
		<input id="xhtml" name="xhtml" type="radio" value="none">None
		<input id="xhtml" name="xhtml" type="radio" value="1-6 months">1-6 months
		<input id="xhtml" name="xhtml" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="xhtml" name="xhtml" type="radio" value="1-2 years">1-2 years
		<input id="xhtml" name="xhtml" type="radio" value="2-3 years">2-3 years
		<input id="xhtml" name="xhtml" type="radio" value="4+ years">4+ years
		<br />
		<input id="nowork" name="nowork" type="radio" value="nowork">I do not want to work in this language
<br />		
<br />
		<label for="html5"> html5:</label>
		<br />
		<input id="html5" name="html5" type="radio" value="none">None		
		<input id="html5" name="html5" type="radio" value="1-6 months">1-6 months
		<input id="html5" name="html5" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="html5" name="html5" type="radio" value="1-2 years">1-2 years
		<input id="html5" name="html5" type="radio" value="2-3 years">2-3 years
		<input id="html5" name="html5" type="radio" value="4+ years">4+ years
		<br />
		<input id="nowork" name="nowork" type="radio" value="nowork">I do not want to work in this language
<br />
<br />
		<label for="javascript"> JavaScript:</label>
		<br />
		<input id="javascript" name="javascript" type="radio" value="none">None		
		<input id="javascript" name="javascript" type="radio" value="1-6 months">1-6 months
		<input id="javascript" name="javascript" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="javascript" name="javascript" type="radio" value="1-2 years">1-2 years
		<input id="javascript" name="javascript" type="radio" value="2-3 years">2-3 years
		<input id="javascript" name="javascript" type="radio" value="4+ years">4+ years
		<br />
		<input id="nowork" name="nowork" type="radio" value="nowork">I do not want to work in this language
<br />
<br />
		<label for="jquery"> jQuery:</label>
		<br />
		<input id="jquery" name="jquery" type="radio" value="none">None		
		<input id="jquery" name="jquery" type="radio" value="1-6 months">1-6 months
		<input id="jquery" name="jquery" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="jquery" name="jquery" type="radio" value="1-2 years">1-2 years
		<input id="jquery" name="jquery" type="radio" value="2-3 years">2-3 years
		<input id="jquery" name="jquery" type="radio" value="4+ years">4+ years
		<br />
		<input id="nowork" name="nowork" type="radio" value="nowork">I do not want to work in this language
<br />
<br />
		<label for="php"> PHP:</label>
		<br />
		<input id="php" name="php" type="radio" value="none">None		
		<input id="php" name="php" type="radio" value="1-6 months">1-6 months
		<input id="php" name="php" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="php" name="php" type="radio" value="1-2 years">1-2 years
		<input id="php" name="php" type="radio" value="2-3 years">2-3 years
		<input id="php" name="php" type="radio" value="4+ years">4+ years
		<br />
		<input id="nowork" name="nowork" type="radio" value="nowork">I do not want to work in this language
<br />
<br />
		<label for="css"> CSS:</label>
		<br />
		<input id="css" name="css" type="radio" value="none">None	
		<input id="css" name="css" type="radio" value="1-6 months">1-6 months
		<input id="css" name="css" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="css" name="css" type="radio" value="1-2 years">1-2 years
		<input id="css" name="css" type="radio" value="2-3 years">2-3 years
		<input id="css" name="css" type="radio" value="4+ years">4+ years
		<br />
		<input id="nowork" name="nowork" type="radio" value="nowork">I do not want to work in this language
<br />
<br />
		<label for="css3"> CSS3:</label>
		<br />
		<input id="css3" name="css3" type="radio" value="none">None	
		<input id="css3" name="css3" type="radio" value="1-6 months">1-6 months
		<input id="css3" name="css3" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="css3" name="css3" type="radio" value="1-2 years">1-2 years
		<input id="css3" name="css3" type="radio" value="2-3 years">2-3 years
		<input id="css3" name="css3" type="radio" value="4+ years">4+ years
		<br />
		<input id="nowork" name="nowork" type="radio" value="nowork">I do not want to work in this language
		</fieldset>

		<fieldset id="roles">
			<legend>Role Experience</legend>
		<label for="frontend"> Front End Development:</label>
		<br />
		<input id="frontend" name="frontend" type="radio" value="none">None	
		<input id="frontend" name="frontend" type="radio" value="1-6 months">1-6 months
		<input id="frontend" name="frontend" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="frontend" name="frontend" type="radio" value="1-2 years">1-2 years
		<input id="frontend" name="frontend" type="radio" value="2-3 years">2-3 years
		<input id="frontend" name="frontend" type="radio" value="4+ years">4+ years

		<br /><br />
	<label for="backend"> Back End Development:</label>
		<br />
		<input id="backend" name="backend" type="radio" value="none">None	
		<input id="backend" name="backend" type="radio" value="1-6 months">1-6 months
		<input id="backend" name="backend" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="backend" name="backend" type="radio" value="1-2 years">1-2 years
		<input id="backend" name="backend" type="radio" value="2-3 years">2-3 years
		<input id="backend" name="backend" type="radio" value="4+ years">4+ years
<br /><br />
			<label for="projectmanage">Project Management:</label>
		<br />
		<input id="projectmanage" name="projectmanage" type="radio" value="none">None	
		<input id="projectmanage" name="projectmanage" type="radio" value="1-6 months">1-6 months
		<input id="projectmanage" name="projectmanage" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="projectmanage" name="projectmanage" type="radio" value="1-2 years">1-2 years
		<input id="projectmanage" name="projectmanage" type="radio" value="2-3 years">2-3 years
		<input id="projectmanage" name="projectmanage" type="radio" value="4+ years">4+ years
		<br /> <br />
		<label for="preference">Role Preference:</label>
		<br />
		<input id="p_frontend" name="p_frontend" type="radio" value="Font-End">Front-End
		<input id="p_backend" name="p_backend" type="radio" value="Back-End">Back-End
		<input id="p_projectmanage" name="p_projectmanage" type="radio" value="Project Manager">Project Manager
		<br /> <br />
		<label for="preference">Desired Team Number:</label>
		<br />
		<input id="23dev" name="23dev" type="radio" value="2-3">2-3 developers
		<input id="34dev" name="34dev" type="radio" value="3-4">3-4 developers
		<input id="46dev" name="46dev" type="radio" value="4-6">4-6 developers
		</fieldset>
		<fieldset id="availablility">
		<legend>Availability</legend>
		<label id="weekly">Weekly Hours</label>
		<br />
		<input id="ten_hours" name="ten_hours" type="radio" value="10">Ten Hours
		<input id="fifteen_hours" name="fifteen_hours" type="radio" value="15">Fifteen Hours
		<input id="twenty_hours" name="twenty_hours" type="radio" value="20">Twenty Hours
		<input id="twentyfive_hours" name="twentyfive_hours" type="radio" value="25">Twenty-Five Hours
		<input id="thirty_hours" name="thirty_hours" type="radio" value="30">Thirty Hours
		<br /><br />
		<label id="weekly">Weekly Availability</label>
		<br />
		<input id="morning" name="ten_hours" type="radio" value="morning">Mornings (ie. Between 8am - 12pm)<br />
		<input id="afternoon" name="fifteen_hours" type="radio" value="afternoon">Afternoons(ie. Between 12pm - 5pm)<br />
		<input id="evening" name="twenty_hours" type="radio" value="evening">Evenings(ie. After 5pm)<br />
		
		<br />
		<label for="other">Other Availability:</label><br />
		<input id="other" name="other" type="text" size="40" placeholder="Please specify your availiablity">
				<br /><br />
		<label id="pdev">Preffered Development:</label><br />
		
		<input id="weekdays" name="weekdays" type="radio" value="weekdays">Weekdays
		<input id="weekends" name="weekends" type="radio" value="weekends">Weekends
		<input id="both" name="both" type="radio" value="both">Both
<br /><br />
		<label id="pdev">Ideal Project Duration:</label><br />
		
		<input id="onemonth" name="onemonth" type="radio" value="1"> 1 Month
		<input id="twomonth" name="twomonth" type="radio" value="2">2-3 Months
		<input id="threemonth" name="threemonth" type="radio" value="3">3-4 Months
		<input id="fivemonth" name="fivemonth" type="radio" value="5">5-6 Months
		</fieldset>
		<input type="submit" id="submit" value="submit">
	</form>



</div>

<?php
include 'includes/footer.php';
?>
	</body>
	</html>