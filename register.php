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
		<label for="aspnet"> asp.net:</label>
		<br />
		<input id="aspnet" name="aspnet" type="radio" value="none">None
		<input id="aspnet" name="aspnet" type="radio" value="1-6 months">1-6 months
		<input id="aspnet" name="aspnet" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="aspnet" name="aspnet" type="radio" value="1-2 years">1-2 years
		<input id="aspnet" name="aspnet" type="radio" value="2-3 years">2-3 years
		<input id="aspnet" name="aspnet" type="radio" value="4+ years">4+ years
		<br />
		<input id="aspnet" name="aspnet" type="radio" value="nowork">I do not want to work in this language
<br />
<br />
		<label for="cSharp"> C#:</label>
		<br />
		<input id="cSharp" name="cSharp" type="radio" value="none">None
		<input id="cSharp" name="cSharp" type="radio" value="1-6 months">1-6 months
		<input id="cSharp" name="cSharp" type="radio" value="6-12 months">6-12 months
		<br />
		<input id="cSharp" name="cSharp" type="radio" value="1-2 years">1-2 years
		<input id="cSharp" name="cSharp" type="radio" value="2-3 years">2-3 years
		<input id="cSharp" name="cSharp" type="radio" value="4+ years">4+ years
		<br />
		<input id="cSharp" name="cSharp" type="radio" value="nowork">I do not want to work in this language<br />
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
		<input id="preference" name="preference" type="radio" value="Font-End">Front-End
		<input id="preference" name="preference" type="radio" value="Back-End">Back-End
		<input id="preference" name="preference" type="radio" value="Project Manager">Project Manager
		<br /> <br />
		<label for="team_number">Desired Team Number:</label>
		<br />
		<input id="team_number" name="team_number" type="radio" value="2-3">2-3 developers
		<input id="team_number" name="team_number" type="radio" value="3-4">3-4 developers
		<input id="team_number" name="team_number" type="radio" value="4-6">4-6 developers
		</fieldset>
		<fieldset id="availablility">
		<legend>Availability</legend>
		<label id="weekly_hours">Weekly Hours</label>
		<br />
		<input id="weekly_hours" name="weekly_hours" type="radio" value="10">Ten Hours
		<input id="weekly_hours" name="weekly_hours" type="radio" value="15">Fifteen Hours
		<input id="weekly_hours" name="weekly_hours" type="radio" value="20">Twenty Hours
		<input id="weekly_hours" name="weekly_hours" type="radio" value="25">Twenty-Five Hours
		<input id="weekly_hours" name="weekly_hours" type="radio" value="30">Thirty Hours
		<br /><br />
		<label id="weekly">Weekly Availability</label>
		<br />
		<input id="weekly" name="weekly" type="radio" value="morning">Mornings (ie. Between 8am - 12pm)<br />
		<input id="weekly" name="weekly" type="radio" value="afternoon">Afternoons(ie. Between 12pm - 5pm)<br />
		<input id="weekly" name="weekly" type="radio" value="evening">Evenings(ie. After 5pm)<br />
		
		<br />
		<label for="other">Other Availability:</label><br />
		<input id="other" name="other" type="text" size="40" placeholder="Please specify your availiablity">
				<br /><br />
		<label id="pdev">Preffered Development:</label><br />
		
		<input id="pdev" name="pdev" type="radio" value="weekdays">Weekdays
		<input id="pdev" name="pdev" type="radio" value="weekends">Weekends
		<input id="pdev" name="pdev" type="radio" value="both">Both
<br /><br />
		<label id="duration">Ideal Project Duration:</label><br />
		
		<input id="duration" name="duration" type="radio" value="1"> 1 Month
		<input id="duration" name="duration" type="radio" value="2">2-3 Months
		<input id="duration" name="duration" type="radio" value="3">3-4 Months
		<input id="duration" name="duration" type="radio" value="5">5-6 Months
		</fieldset>
		<input type="submit" id="submit" value="submit">
	</form>



</div>

<?php
include 'includes/footer.php';
?>
	</body>
	</html>