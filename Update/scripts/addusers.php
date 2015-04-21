<?php

	include("connection.php");

	// echo 'updateSubmit = ' . $_POST['updateSubmit'];
	// echo 'updateEmail = ' . $_POST['updateEmail'];
	// echo 'row id = ' . $row['id'];

	if($_POST['addSubmit']){

		if($_POST['addAdmin'] == "checked") $admin = 1;
			else $admin = 0;

		$sql = 'INSERT INTO calicousers (email, username, password, id, admin) VALUES ("' . $_POST['addEmail'] . '", 
			"' . $_POST['addUsername'] . '", "' . md5(md5($_POST['addEmail']).$_POST['addPassword']) . '", "' . $_POST['addID'] . '", "' . $admin . '")';

		$query = mysqli_query($link, $sql);

	}

?>

<html>

<head>

<style>

	#addForm {
		width: 450px;
		/*background-color: red;*/
	}

	#addformDescription {
		color: rgb(235, 235, 235);
		font-size: 1.5em;
		margin: 0;
		/*margin-left: 40px;*/
	}

	#subDescription {
		color: rgb(235, 235, 235);
		font-size: 1.1em;
		margin: 0;
		margin-bottom: 20px;
	}

	.addFormInput {
		width: 180px;
		height: 30px;
		margin: 10px;
		border-radius: 5px;
	}

	#addFormSubmit {
		width: 90px;
		height: 30px;
		border-radius: 5px;
		margin-left: 30px;
	}

	#adminCheckbox {
	    width: 13px;
	    height: 13px;
	    padding: 0;
	    margin-right: 10px
	    vertical-align: bottom;
	    position: relative;
	    top: 2px;
	    *overflow: hidden;
  	}  

	#labelAdmin {
		color: rgb(235, 235, 235);
		font-size: 0.8em;
		margin-left: 145px;
	}

	#identifier {
		width: 25px;
		border-radius: 5px;
		margin-right: 10px;
	}

	#labelID {
		color: rgb(235, 235, 235);
		font-size: 0.7em;
		margin-left: 10px;
	}

</style>

</head>

<body>

<center><div id="addForm">

	<center><p id="addFormDescription">Add the User Information: </p></center>
	<center><p id="subDescription">All parts of the form must be filled out</p></center>

    <form method="post">

        <input type="email" name="addEmail" placeholder="Email" class="addFormInput" />

        <input type="text" name="addUsername" placeholder="Username" class="addFormInput" />

        <input type="password" name="addPassword" placeholder="Password" class="addFormInput" />

        <input type="text" name="addID" placeholder="ID" class="addFormInput" />

        <label for="addAdmin" id="labelAdmin">Admin Privilages: </label>
        <input type="checkbox" value="checked" name="addAdmin" id="adminCheckbox" />

<!--         <label for="identifier" id="labelID">Enter ID:</label>
        <input type="text" name="identifier" id="identifier" /> -->

        <input type="submit" name="addSubmit" value="Add" id="addFormSubmit" />

    </form>

    <center><p id="subDescription" style="margin-top: 45px">Note: Personal information remains empty</p></center>

</div></center>

</body>

</html>
