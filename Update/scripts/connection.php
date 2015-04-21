<?php

	// echo "session starts here for home.php<br />";
 //  	echo "print session in connection.php<br />";
 //  	print_r($_SESSION);
 //  	echo "<br />";


	//create link/connection variable to database
	$link = mysqli_connect("", "", "", "");

	//if the connection could not be made, kill the script and display the message
	if(mysqli_connect_error()) die("could not connect to database");

?>