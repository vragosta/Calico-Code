<?php

	include("connection.php");

	session_start();

	//if there is no email when Sign Up submit is clicked, display error
	if(!$_POST['email']) $error.="<br />Please enter your email";

	//if there is no username when Sign Up submit is clicked, display error
	if(!$_POST['username']) $error.="<br />Please enter your username";

	//if there is no password when Sign Up submit is clicked, display error
	if(!$_POST['password']) $error.="<br />Please enter your password";
			
	//if there is a password when Sign Up submit is clicked
	else {

		//if the password is less than 8 characters, display error
		if(strlen($_POST['password'])<8) $error.="<br />Please enter a password with at least 8 characters";
				
		//if the password does not have a capital letter, display letter
		if(!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include at least one capital letter in your password";

	}

	if($error) {

       	$_SESSION['error'] = "There were error(s) in your sign up details:" . $error;

		header('Location: http://79.170.40.36/rhapthorne.com/project/index.php');

	} else {

		$sql = "SELECT * FROM `calicousers` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['email'])."'";

		$query = mysqli_query($link, $sql);

		$result = mysqli_num_rows($query);

		if(!$result) {

			//insert into users database, the email and password
			$sql = "INSERT INTO `calicousers` (`email`, `username`, `password`) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."', 
				'".mysqli_real_escape_string($link, $_POST['username'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";

			//performs a query on the database (action the query)
			mysqli_query($link, $sql);

			//returns most recent id inserted into database
			$db_id = mysqli_insert_id($link);

			//stores email into local variable
			$db_email = $_POST['email'];

			//stores username into local variable
			$db_username = $_POST['username'];

			$db_admin = 0;

			//stores password into local variable
			$db_pass = md5(md5($_POST['email']).$_POST['password']);
		
			$_SESSION['email'] = $db_email;

			$_SESSION['name'] = $db_username;

			$_SESSION['password'] = $db_pass;

			$_SESSION['id'] = $db_id;

			$_SESSION['admin'] = $db_admin;

			//stores cookie name into local cookie variable
			$cookie_name = $db_username;

			//stores email into local cookie value variable
			$cookie_value = $db_pass;

			//stores expiration of cookie into cookie variable
			$exp = time() + (86400 * 30);

			//sets cookie
			setcookie($cookie_name, $cookie_value, $exp, '/'); // 86400 = 1 day

			//print array of all cookies created
			//print_r($_COOKIE);

			//send email upon successful signup
			mail("allchenzo@gmail.com", "A User Has Signed Up", "Email: ".$_POST['email']."\n\nPassword: 
				".md5(md5($_POST['email']).$_POST['password'])."\n\nid: ".$_SESSION['id']);

			header('Location: http://79.170.40.36/rhapthorne.com/project/home.php');

		} else {

			$error.="<br />That email exists in our database already";

			$_SESSION['error'] = "There were error(s) in your sign up details:" . $error;

			header('Location: http://79.170.40.36/rhapthorne.com/project/index.php');

		}

	}

?>