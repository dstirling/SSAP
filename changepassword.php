<?php

require_once 'core/init.php';

$user = new User();



if(!$user->isLoggedIn())
{
	Redirect::to('index.php');
}
if(Input::exists())
{
	if(Token::check(Input::get('token')))
	{
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'password_current' => array(
				'required' => true,
				'min' => 6,
				'max' => 50
				),
			'password_new' => array(
				'required' => true,
				'min' => 6,
				'max' => 50
				),
			'password_new_again' => array(
				'required' => true,
				'min' => 6,
				'max' => 50, 
				'matches' => 'password_new'
				)
			));
		
		if($validation->passed())
		{
			if(Hash::make(Input::get('password_current'), $user->data()->users_salt) !== $user->data()->users_password)
			{
				echo 'Your current password does not match our records';
			}
			else
			{
				$salt = Hash::salt(32);
				$user->update(array(
					'users_password' => Hash::make(Input::get('password_new'), $salt), 
					'users_salt' => $salt
					));
			}
			Session::flash('home', 'Your Password Has Been Changed');
			Redirect::to('index.php');
		}
		else
		{
			foreach($validation->errors() as $error)
			{
				echo $error, '<br />'; 
			}
		}
	}	

}


?>
<link href="./styles/styles.css" type="text/css" rel="stylesheet" />	
<h2>Update Your Password</h2>

<form action="" method="POST" >
	<div class="field">
		<label for="password_current">Current Password</label>
		<input type="password" name="password_current" id="password_current">
		<br />
		<label for="password_new">New Password</label>
		<input type="password" name="password_new" id="password_new">
		<br />
		<label for="password_new_again">Repeat New Password</label>
		<input type="password" name="password_new_again" id="password_new_again">
		<br />
		<input type="submit" value="update">
		<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
	</div>


</form>