<?php

	include("connection.php");

	session_start();

		//if there is no email when Sign Up submit is clicked, display error
	if(!$_POST['loginEmail']) $error.="<br />Please enter your email";

	//if there is no password when Sign Up submit is clicked, display error
	if(!$_POST['loginPassword']) $error.="<br />Please enter your password";
			

	if($error) {

       	$_SESSION['error'] = "There were error(s) in your login details:" . $error;

		header('Location: http://79.170.40.36/rhapthorne.com/project/index.php');

	} else {

		$sql = "SELECT * FROM `calicousers` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['loginEmail'])."' 
		AND `password` = '".md5(md5($_POST['loginEmail']).$_POST['loginPassword'])."' LIMIT 1";

		$query = mysqli_query($link, $sql);
	
		$row = mysqli_fetch_array($query);

		if($row){

			$db_email = $row['email'];

			//stores password into local variable
			$db_pass = $row['password'];

			//stores username into local variable
			$db_username = $row['username'];

			//stores id into local variable
			$db_id = $row['id'];

			$db_admin = $row['admin'];
		
			$_SESSION['email'] = $db_email;

			$_SESSION['name'] = $db_username;

			$_SESSION['password'] = $db_pass;

			$_SESSION['id'] = $db_id;

			$_SESSION['admin'] = $db_admin;

			//stores cookie name into local cookie variable
			$cookie_name = $_SESSION['username'];

			//stores email into local cookie value variable
			$cookie_value = $_SESSION['password'];

			//stores expiration of cookie into cookie variable
			$exp = time() + (86400 * 30);

			setcookie($cookie_name, $cookie_value, $exp, '/'); // 86400 = 1 day

			header('Location: http://79.170.40.36/rhapthorne.com/project/home.php');

		} else {

			header('Location: http://79.170.40.36/rhapthorne.com/project/index.php');

		}

	}

?>