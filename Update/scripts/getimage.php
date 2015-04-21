<?php
	
	header("Content-type: image/jpeg");
	
	session_start();

    include("connection.php");

   	$sql = 'SELECT * FROM uploadimage WHERE id="' . $_SESSION['id'] . '" ';

	$query = mysqli_query($link,$sql);

	$row = mysqli_fetch_array($query);

	$image = $row['image'];

	echo $image;

?>