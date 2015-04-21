<?php

	session_start();

	include("connection.php");

    if(isset($_POST['editSubmit'])) {

    	// $name = $_FILES['image']['name'];
    	// echo $name;
    	// die();
    	// // $size = $_FILES['image']['size'];
    	// $tmp_name = $_FILES['image']['tmp_name'];

    	// if(isset($name)) {

    	// 	$location = "avatars/$name";

    	// 	//include check to make sure its of img type and not .exe for example
    	// 	move_uploaded_file($tmp_name, $location);

	    	$sql = 'INSERT INTO userprofile (id) VALUES("' . $_SESSION['id'] .'")';

			mysqli_query($link, $sql);

			$sql = 'UPDATE userprofile SET firstname="' . $_POST['firstname'] . '", lastname="' . $_POST['lastname'] . '", age="' . $_POST['age'] . '", city="' . $_POST['city'] . '", birthday="' . $_POST['birthday'] . '"  WHERE id="' . $_SESSION['id'] .'"';

			mysqli_query($link, $sql);

		//}

    }
    
    header('Location: http://79.170.40.36/rhapthorne.com/project/editprofile.php');

?>