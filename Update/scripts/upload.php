<?php

	session_start();

	include("connection.php");

	if(isset($_POST['upload'])){

		$file = $_FILES['image']['tmp_name'];

		if(isset($file)) {

			$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

			$image_name = addslashes($_FILES['image']['name']);

			$image_size = getimagesize($_FILES['image']['tmp_name']);

			if($image_size == FALSE) header('Location: http://79.170.40.36/rhapthorne.com/project/home.php');

			// else if($image_size > 5242880) header('Location: home.php');
			
				// else if(!preg_match("/.(gif|jpg|JPG|png)$/i", $image_name)) header('Location: home.php');

					else {

						$sql = 'INSERT INTO uploadimage (id) VALUES("' . $_SESSION['id'] .'")';

						mysqli_query($link, $sql);

						$sql = 'UPDATE uploadimage SET id="' . $_SESSION['id'] . '", name="' . $image_name . '", image="' . $image . '" WHERE id="' . $_SESSION['id'] .'"';

						mysqli_query($link, $sql);

						$sql = 'INSERT INTO uploadimage (id, name, image) VALUES ("' . $_SESSION['id'] . '", "' . $image_name . '", "' . $image . '")';

						$insert = mysqli_query($link, $sql);

						header('Location: http://79.170.40.36/rhapthorne.com/project/editprofile.php');

			}

		}
	}

?>