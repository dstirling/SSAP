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
			'firstname' => array(
				'required' => true,
				'min' => 2,
				'max' => 50
				),
			'lastname' => array(
				'required' => true,
				'min' => 2,
				'max' => 50
				)
			));
		
		if($validation->passed())
		{
			try
			{
				$user->update(array(
					'users_firstname' => Input::get('firstname'),
					'users_lastname' => Input::get('lastname')
					));
				Session::flash('home', 'Your details have been updated.');
				Redirect::to('index.php');
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
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
<h2>Update Your Profile</h2>

<form action="" method="POST" >
	<div class="field">
		<label for="firstname">First Name</label>
		<input type="text" name="firstname" value="<?php echo escape($user->data()->users_firstname); ?>">
		<br />
		<label for="lastname">Last Name</label>
		<input type="text" name="lastname" value="<?php echo escape($user->data()->users_lastname); ?>">
		<br />
		<input type="submit" value="update">
		<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
	</div>


</form>