<?php
require_once 'core/init.php';

// if (Input::exists())
// {
// 	echo Input::get('username');
// }

if(Input::exists())
{
	$validate = new Validate();
	$validation = $validate->check($_POST, array(
		'username' => array(
			'required' => true,
			'min' => 2,
			'max' => 20, 
			'unique' => 'users'
			),
		'firstname' => array(
			'required' => true,
			'min' => 2,
			'max' => 20
			),
		'lastname' => array(
			'required' => true,
			'min' => 2,
			'max' => 20
			),
		'password' => array(
			'required' => true,
			'min' => 6
			),
		'password_repeat' => array(
			'required' => true,
			'matches' => 'password'
			)
		// 'username' => array(),
		// 'username' => array(),

		));

	if($validation->passed())
	{
		echo 'passed';
	}
	else
	{
		foreach($validation->errors() as $error)
		{
			echo $error, '<br />';
		}
		//print_r($validation->errors());
	}
}
?>
<form action="" method="POST">
	<div class="field">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off">
	</div>

	<div class="field">
		<label for="firstname">First Name</label>
		<input type="text" name="firstname" id="firstname" value="<?php echo escape(Input::get('firstname')); ?>" autocomplete="off" >
	</div>

	<div class="field">
		<label for="lastname">Last Name</label>
		<input type="text" name="lastname" id="lastname" value="<?php echo escape(Input::get('lastname')); ?>" autocomplete="off" >
	</div>

	<div class="field">
		<label for="password">Choose a password</label>
		<input type="password" name="password" id="password"  autocomplete="off">
	</div>

	<div class="field">
		<label for="password_repeat">Confirm your password</label>
		<input type="password" name="password_repeat" id="password_repeat" >
	</div>

	<input type="submit" value="register">
</form>