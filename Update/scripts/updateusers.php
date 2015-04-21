<? include("connection.php"); ?>
<?php

	// echo 'updateSubmit = ' . $_POST['updateSubmit'];
	// echo 'updateEmail = ' . $_POST['updateEmail'];
	// echo 'row id = ' . $row['id'];

	if($_POST['updateSubmit']){

		if($_POST['updateEmail']){
			$sql = 'UPDATE calicousers SET email = "' . $_POST['updateEmail'] . '" WHERE id="' . $_POST['identifier'] . '"';
			$query = mysqli_query($link, $sql);
		}

		if($_POST['updateUsername']){
			$sql = 'UPDATE calicousers SET username = "' . $_POST['updateUsername'] . '" WHERE id="' . $_POST['identifier'] . '"';
			$query = mysqli_query($link, $sql);
		}

		if($_POST['updatePassword']){
			$sql = 'UPDATE calicousers SET password = "' . md5(md5($_POST['updateEmail']).$_POST['updatePassword']) . '" WHERE id="' . $_POST['identifier'] . '"';
			$query = mysqli_query($link, $sql);
		}

		if($_POST['updateID']){
			$sql = 'UPDATE calicousers SET id = "' . $_POST['updateID'] . '" WHERE id="' . $_POST['identifier'] . '"';
			$query = mysqli_query($link, $sql);
		}

		/******************************************************/

		if($_POST['updateFirstname']){

			$sql = 'UPDATE userprofile SET firstname = "' . $_POST['updateFirstname'] . '" WHERE id="' . $_POST['identifier'] . '"';
			
			$query = mysqli_query($link, $sql);
			
			$row = mysqli_fetch_array($query);
			
			if(!$row) {

				$sql = 'INSERT INTO userprofile (id) VALUES("' . $_POST['identifier'] .'")';

				mysqli_query($link, $sql);

				$sql = 'UPDATE userprofile SET firstname="' . $_POST['updateFirstname'] . '" WHERE id="' . $_POST['identifier'] .'"';

				mysqli_query($link, $sql);

			}

		}

		if($_POST['updateLastname']){
			
			$sql = 'UPDATE userprofile SET lastname = "' . $_POST['updateLastname'] . '" WHERE id="' . $_POST['identifier'] . '"';
			
			$query = mysqli_query($link, $sql);
			
			$row = mysqli_fetch_array($query);
			
			if(!$row) {

				$sql = 'INSERT INTO userprofile (id) VALUES("' . $_POST['identifier'] .'")';

				mysqli_query($link, $sql);

				$sql = 'UPDATE userprofile SET lastname="' . $_POST['updateLastname'] . '" WHERE id="' . $_POST['identifier'] .'"';

				mysqli_query($link, $sql);

			}
		}

		if($_POST['updateAge']){
			
			$sql = 'UPDATE userprofile SET age = "' . $_POST['updateAge'] . '" WHERE id="' . $_POST['identifier'] . '"';
			
			$query = mysqli_query($link, $sql);
			
			$row = mysqli_fetch_array($query);
			
			if(!$row) {

				$sql = 'INSERT INTO userprofile (id) VALUES("' . $_POST['identifier'] .'")';

				mysqli_query($link, $sql);

				$sql = 'UPDATE userprofile SET age="' . $_POST['updateAge'] . '" WHERE id="' . $_POST['identifier'] .'"';

				mysqli_query($link, $sql);

			}
		}

		if($_POST['updateCity']){
			
			$sql = 'UPDATE userprofile SET city = "' . $_POST['updateCity'] . '" WHERE id="' . $_POST['identifier'] . '"';
			
			$query = mysqli_query($link, $sql);
			
			$row = mysqli_fetch_array($query);
			
			if(!$row) {

				$sql = 'INSERT INTO userprofile (id) VALUES("' . $_POST['identifier'] .'")';

				mysqli_query($link, $sql);

				$sql = 'UPDATE userprofile SET city="' . $_POST['updateCity'] . '" WHERE id="' . $_POST['identifier'] .'"';

				mysqli_query($link, $sql);

			}
		}

		if($_POST['updateBirthday']){
			
			$sql = 'UPDATE userprofile SET birthday = "' . $_POST['updateBirthday'] . '" WHERE id="' . $_POST['identifier'] . '"';
			
			$query = mysqli_query($link, $sql);
		
			$row = mysqli_fetch_array($query);
			
			if(!$row) {

				$sql = 'INSERT INTO userprofile (id) VALUES("' . $_POST['identifier'] .'")';

				mysqli_query($link, $sql);

				$sql = 'UPDATE userprofile SET birthday="' . $_POST['updateBirthday'] . '" WHERE id="' . $_POST['identifier'] .'"';

				mysqli_query($link, $sql);

			}

		}

		/******************************************************/

		if($_POST['updateAdmin'] == "checked"){
			$sql = 'UPDATE calicousers SET admin = 1 WHERE id="' . $_POST['identifier'] . '"';
			$query = mysqli_query($link, $sql);
		}

		if(!isset($_POST['updateAdmin'])){
			$sql = 'UPDATE calicousers SET admin = 0 WHERE id="' . $_POST['identifier'] . '"';
			$query = mysqli_query($link, $sql);
		}

	}

?>


<html>

<head>

	<style>

	#updateForm {
		width: 450px;
		/*background-color: red;*/
		margin-left: 140px;
	}

	.updateFormInput {
		width: 180px;
		height: 30px;
		margin: 10px;
		border-radius: 5px;
	}

	#updateFormSubmit {
		width: 90px;
		height: 30px;
		border-radius: 5px;
		margin-left: 5px;
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
		margin-left: 80px;
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

	#tableSection {
		margin-bottom: 10px;
	}

	</style>

</head>

<body>

	<center><div id="adminMain">

		<!-- <label style="color: rgb(235, 235, 235);">Enter ID: </label> -->

		<form target="adminFrame" method="post">

			<label style="color: rgb(235, 235, 235);">Enter ID: </label>

			<input type="text" name="userEmail" style="border-radius: 5px" />&nbsp;

			<input type="submit" name="userSubmit" style="border-radius: 5px;" />

		</form>

	</div></center>

	<div id="tableSection">

		<?php

			if($_POST['userSubmit']) {

		  		$sql = 'SELECT * FROM calicousers WHERE email="'.$_POST['userEmail'].'" OR id = "'.$_POST['userEmail'].'"';

		  		//echo "$sql";

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

		    		/********************************************************/

		    	$sql = 'SELECT * FROM userprofile WHERE id="'.$_POST['userEmail'].'"';

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

		    		/********************************************************/

				}

			}

		?>

	</div>

    <div id="updateForm">

        <form method="post">

        	<input type="email" name="updateEmail" placeholder="Email" class="updateFormInput" />

        	<input type="text" name="updateUsername" placeholder="Username" class="updateFormInput" />

        	<input type="password" name="updatePassword" placeholder="Password" class="updateFormInput" />

        	<input type="text" name="updateID" placeholder="ID" class="updateFormInput" />

        	<input type="text" name="updateFirstname" placeholder="First Name" class="updateFormInput" />

        	<input type="text" name="updateLastname" placeholder="Last Name" class="updateFormInput" />

        	<input type="int" name="updateAge" placeholder="Age" class="updateFormInput" />

        	<input type="text" name="updateCity" placeholder="City" class="updateFormInput" />

        	<input type="date" name="updateBirthday" placeholder="Birthday" class="updateFormInput" /><br />

        	<label for="updateAdmin" id="labelAdmin">Admin Privilages: </label>
        	<input type="checkbox" value="checked" name="updateAdmin" id="adminCheckbox" />

        	<label for="identifier" id="labelID">Enter ID:</label>
        	<input type="text" name="identifier" id="identifier" />

        	<input type="submit" name="updateSubmit" value="Update" id="updateFormSubmit" />

        </form>

    </div>

</body>

</html>