<?php
	
	include("connection.php");

	if($_POST['deleteSubmit']){

		$sql = 'DELETE FROM calicousers WHERE id="' . $_POST['identifier'] . '"';
		$query = mysqli_query($link, $sql);

		/*********************************************/

		$sql = 'DELETE FROM userprofile WHERE id="' . $_POST['identifier'] . '"';
		$query = mysqli_query($link, $sql);

		/*********************************************/
	}

?>

<html>

<head>

	<style>

		#labelID {
			color: rgb(235, 235, 235);
			font-size: 0.7em;
			margin-left: 10px;
		}

		#identifier {
			width: 25px;
			border-radius: 5px;
			margin-right: 10px;
		}

		#deleteFormSubmit {
			width: 150px;
			/*margin: 20px 0px 0px 250px;*/
			margin-top: 20px;
			border-radius: 5px;
		}

	</style>


</head>

<body>

	<center><div id="adminMain">

		<!-- <label style="color: rgb(235, 235, 235);">Enter Email/ID: </label><br /> -->

		<form target="adminFrame" method="post">

			<label style="color: rgb(235, 235, 235);">Enter Email/ID: </label>

			<input type="text" name="userDeleteEmail" style="border-radius: 5px" />&nbsp;

			<input type="submit" name="userDeleteSubmit" style="border-radius: 5px;" />

		</form>

	</div></center>

	<div id="tableSection">

		<?php

			if($_POST['userDeleteSubmit']) {

		  		$sql = 'SELECT * FROM calicousers WHERE email="'.$_POST['userDeleteEmail'].'" OR id = "'.$_POST['userDeleteEmail'].'"';

		  		$result = mysqli_query($link,$sql);

		  		if($result) {

		  			echo '<center><p style="color: rgb(235, 235, 235); font-size: 1.5em;">User Table:</p>';

		  			echo '<center><table border="2" style="background-color: rgb(235, 235, 235); border-radius: 5px;">
		        		<tr>
		        		<th><center>Email</center></th>
		        		<th><center>Username</center></th>
		        		<th><center>Password</center></th>
		        		<th><center>&nbsp;ID&nbsp;</center></th>
		        		<th><center>&nbsp;Admin&nbsp;</center></th>
		        		</tr>';

		    		$row = mysqli_fetch_array($result);

		    		echo "<tr>";
		    		echo "<td><center>&nbsp;" . $row['email'] . "&nbsp;</center></td>";
		    		echo "<td><center>&nbsp;" . $row['username'] . "&nbsp;</center></td>";
		    		echo "<td><center>&nbsp;" . $row['password'] . "&nbsp;</center></td>";
		    		echo "<td><center>" . $row['id'] . "</center></td>";
		    		echo "<td><center>" . $row['admin'] . "</center></td>";
		    		echo "</tr>";

		    		echo "</table></center>";

				}

				/*******************************************************/

				$sql = 'SELECT * FROM userprofile WHERE id="'.$_POST['userDeleteEmail'].'"';

		  		$result = mysqli_query($link,$sql);

		  		if($result) {

		  			echo '<center><p style="color: rgb(235, 235, 235); font-size: 1.5em;">Profile Information Table:</p>';

			  		echo '<center><table border="2" style="background-color: rgb(235, 235, 235); border-radius: 5px;">
					      <tr>
					      <th><center>&nbsp;ID&nbsp;</center></th>
					      <th><center>&nbsp;First Name&nbsp;</center></th>
					      <th><center>&nbsp;Last Name&nbsp;</center></th>
					      <th><center>&nbsp;Age&nbsp;</center></th>
					      <th><center>&nbsp;City&nbsp;</center></th>
					      <th><center>Birthday</center></th>
					      </tr>';

			    	$row = mysqli_fetch_array($result);

			    	echo "<tr>";
				    echo "<td><center>&nbsp;" . $row['id'] . "&nbsp;</center></td>";
				    echo "<td><center>&nbsp;" . $row['firstname'] . "&nbsp;</center></td>";
				    echo "<td><center>&nbsp;" . $row['lastname'] . "&nbsp;</center></td>";
				    echo "<td><center>" . $row['age'] . "</center></td>";
				    echo "<td><center>" . $row['city'] . "</center></td>";
				    echo "<td><center>" . $row['birthday'] . "</center></td>";
				    echo "</tr>";

			    	echo "</table></center>";

				}




				/*******************************************************/

			}

		?>

	</div>

    <center><div id="deleteForm">

        <form method="post">

        	<label for="identifier" id="labelID">Enter ID:</label>
        	<input type="text" name="identifier" id="identifier" />

        	<input type="submit" name="deleteSubmit" value="Delete" id="deleteFormSubmit" />

        </form>

    </div></center>


</body>
</html>