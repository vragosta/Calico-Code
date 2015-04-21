<?php

	// session_start();
	// echo "print session in welcomeuser.php<br />";
	// print_r($_SESSION);
	// echo "<br />";

	// $email = $_SESSION['name'];
	// $email_array = explode("@", $email);
	// $user = $email_array[0];

	// echo '<div style="width: 110px; height: 100px; border: 1px solid #1af0ca; background-color: #303030; border-radius: 10px; float: left; margin: 0 0 15px 5px;"></div>';
	echo '<div style="width: 110px; height: 100px; border: 1px solid #1af0ca; background-color: #303030; border-radius: 10px; float: left; margin: 0 0 15px 5px;">
		  </div>';
		  // <img src="getimage.php" width="100%" height="100%" />

	$offset = strtotime("-5 hours");
	$dayandtime = date("D h:i A", $offset);
	echo "<center>" . $dayandtime . "</center>";

	$date = date("M d, Y");
	echo "<center>" . $date;

	$user = $_SESSION['name'];

	if($_SESSION['admin'] == 1) {
		echo "<center>Hello, <a href='http://79.170.40.36/rhapthorne.com/project/viewprofile.php' style='text-decoration: none; color: #1af0ca;'>" . $user . "</a>!</center>";
		echo "<hr /><center><a href='http://79.170.40.36/rhapthorne.com/project/admin.php' style='text-decoration: none; color: rgb(235, 235, 235);'>Admin Page</a></center>";
		echo "<hr /><center><a href='http://79.170.40.36/rhapthorne.com/project/editprofile.php' style='text-decoration: none; color: rgb(235, 235, 235);'>Edit Profile</a></center>";
		echo "<hr /><center><a href='http://79.170.40.36/rhapthorne.com/project/viewfiles.php' style='text-decoration: none; color: rgb(235, 235, 235);'>View Files</a></center><hr />";
	} else {
		echo "Hello, <a href='http://79.170.40.36/rhapthorne.com/project/viewprofile.php' style='text-decoration: none; color: #1af0ca;'>" . $user . "</a>!";
		echo "<hr /><center><a href='http://79.170.40.36/rhapthorne.com/project/editprofile.php' style='text-decoration: none; color: rgb(235, 235, 235);'>Edit Profile</a></center>";
		echo "<hr /><center><a href='http://79.170.40.36/rhapthorne.com/project/viewfiles.php' style='text-decoration: none; color: rgb(235, 235, 235);'>View Files</a></center><hr />";
	}
?>