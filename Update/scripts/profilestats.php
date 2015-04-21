<?php

	session_start();

	include("connection.php");

	$sql = 'SELECT * FROM userprofile WHERE id="' . $_SESSION['id'] .'"';

	$query = mysqli_query($link, $sql);

	$row = mysqli_fetch_array($query);

	echo '<center>';
	echo 'Web ID: ' . $row['id'] . '<br />';
	echo 'First Name: ' . $row['firstname'] . '<br />';
	echo 'Last Name: ' . $row['lastname'] . '<br />';
	echo 'Age: ' . $row['age'] . '<br />';
	echo 'City: ' . $row['city'] . '<br />';
	echo 'Birthday: ' . $row['birthday'] . '<br />';
	echo '</center>';
	// mysqli_close($link);

?>