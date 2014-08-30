<?php
require_once 'core/init.php';

// if (Input::exists())
// {
// 	echo Input::get('username');
// }

//var_dump(Token::check(Input::get('token')));
 


if(Input::exists())
{
	if(Token::check(Input::get('token')))
	{
		echo 'Token has been verified<br />';

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
			$user = new User();

			$salt = Hash::salt(32);

			try
			{
				$user->create(array(
					'users_username' => Input::get('username'), 
					'users_password' => Hash::make(Input::get('password'), $salt), 
					'users_salt' => $salt, 
					'users_firstname' => Input::get('firstname'), 
					'users_lastname' => Input::get('lastname'), 
					'users_joined' => date('Y-m-d H:i:s'), 
					'users_group' => 1
					));

			Session::flash('home', 'You have been registered.  You can now log in.');
 			Redirect::to('index.php');
			}
			catch (Exception $e)
			{
				die($e->getMessage());
			}

			// Session::flash('success', 'You registered successfully<br />');
			// header('Location: index.php');//redirects to index.php	
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

	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">  <!-- this creates new token is also set as a session.  changes on refresh -->
	<!-- register button must be hit on the page with the correct token -->
	<input type="submit" value="register">
</form>