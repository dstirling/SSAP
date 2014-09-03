<!DOCTYPE html>
<html>
<head><title>Log In</title>

<link href='http://fonts.googleapis.com/css?family=Crafty+Girls|Lobster|Shadows+Into+Light|Francois+One|Varela+Round|Indie+Flower|Alegreya|Pacifico|Architects+Daughter|Lobster+Two' rel='stylesheet' type='text/css'>
<link href="./styles/styles.css" type="text/css" rel="stylesheet" />

</head>
<body>
	<div class="container_log">
	

<?php 
	require_once 'core/init.php';
	include 'includes/header.php';
	//include 'body.php';
	
	if(Input::exists())
	{
		if(Token::check(Input::get('token')))
		{
			$validate = new Validate();
			$validation = $validate->check($_POST, array(
				'username'=> array('required' => true),
				'password'=> array('required' => true)
			));

			if($validation->passed()) 
			{
				///log in user
				$user = new User();

				$remember = (Input::get('remember') === 'on') ? true : false;
				$login = $user->login(Input::get('username'), Input::get('password'), $remember); //get the username and password from the form

				if($login)
				{
					Redirect::to('index.php');
				}
				else 
				{
					echo 'Login Failed';
				}
			}
			else 
			{
				foreach($validation->errors() as $error)
				{
					echo $error . '<br />';
				}
			}
		}
	}
?>

	<h2>Hello you beautiful human being, log on this shit</h2>
	<!-- <div class="backimage">
	<img src="./imgs/pageGears.png">
	</div>
	 -->

	<form action="" method="POST" >
		<div class="field">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" autocomplete="off">
		</div>

		<div class="field">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" autocomplete="off">
		</div>
		<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
	    <input type="submit" id="submit" value="Log In">
	
	    <div class="field">
	    	<label for="remember">
	    		<input type="checkbox" name="remember" id="remember">Stay Logged In
	    	</label>
	    </div>


	</form>


</div>
<?php
include 'includes/footer.php';
?>

</body>

</html>