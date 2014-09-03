<?php

require_once 'core/init.php';

if(!$username = Input::get('user')) {
	Redirect::to('index.php');
}
else 
{
	$user = new User($username);
	if(!$user->exists())
	{
		Redirect::to(404);
	}
	else
	{
		$userdata = $user->data();

	}
	?>

	<h3><?php echo escape($userdata->users_username); ?></h3>
	<p>First name: <?php echo escape($userdata->users_firstname); ?></p>
	<p>Last name: <?php echo escape($userdata->users_lastname); ?></p>



<?php
}
