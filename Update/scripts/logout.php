<?php

  //MUST HAVE SESSION_START HERE!!
  session_start();

   	//stores cookie name into local cookie variable
  	$cookie_name = $_SESSION['name'];
    echo "Cookie Name: " . $cookie_name . "<br />";

  	//stores email into local cookie value variable
  	$cookie_value = $_SESSION['password'];
    echo "Cookie Value: " . $cookie_value . "<br />";

  	//stores expiration of cookie into cookie variable
  	$exp = time() - (86400 * 30);

  	setcookie($cookie_name, $cookie_value, $exp, '/'); // 86400 = 1 day

    session_unset();
    session_destroy();
    header('Location: http://79.170.40.36/rhapthorne.com/project/index.php');
    exit();
	
?>