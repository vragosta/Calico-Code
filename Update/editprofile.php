<?php

  //MUST HAVE SESSION_START HERE!!
  session_start();

  if(!isset($_SESSION['name'])) {
    header('Location: http://79.170.40.36/rhapthorne.com/project/index.php');
  }
  
  // echo "session starts here for editprofile.php<br />print session in editprofile.php<br />";
  // print_r($_SESSION);

?>

<!doctype html>
<html>

<head>

  <!-- Meta Data About Document -->
  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Page Title -->
  <title>CalicoHome</title>

  <!-- jQuery Online Import -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <!-- CSS Bootstrap Online Import -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />

  <!-- Javascript Bootstrap Online Import -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

  <!-- GoogleFont Londrina Solid -->
  <link href='http://fonts.googleapis.com/css?family=Londrina+Solid' rel='stylesheet' type='text/css'>

  <!-- GoogleFont Droid Sans -->
  <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

  <!-- External Link to CSS -->
  <link rel="stylesheet" type="Text/css" href="css/editprofilestyles.css">

  <!-- Calico Icon Link -->
  <link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico">

</head>

<body>

  <!-- creates a fixed width for the entire page -->
  <div class="fixedWidth">

    <!-- creates top bar to house logo/brand and login utilities -->
    <div id="topBar">

      <!-- creates logo section -->
      <div id="logoSection">

        <!-- creates logo/brand, color: light blue-->
        <!-- <h1 id="brand">Calico.<span style="color: #80bd01">Code</span></h1> -->
        <h1 id="logo">Calico.<span style="color: #1af0ca">Code</span></h1>

      </div>
      
      <!-- creates menu section -->
      <div id="menuSection">

        <ul id="menuList">

          <li class="menuItem"><a href="home.php">Home</a></li>

          <li class="menuItem"><a href="">Calico Bin</a></li>

          <li class="menuItem"><a href="">Calico Text Editor</a></li>

          <li class="menuItem"><a href="">Chat</a></li>

          <li class="menuItem"><a href="scripts/logout.php">Log Out</a></li>
          <!-- <li class="menuItem"><a href="index.php" onclick="$(this).homeForm.submit();">Log Out</a></li> -->
          <!-- <li><form action="index.php" method="post"><input type="submit" name ="submit" value="Logout" id="logoutButton" /></form></li> -->
          <!-- <li><input type="submit" name="submit" value="Logout" id="logoutButton" /></li> -->

        </ul>

      </div>

    <!-- create a search bar when ready -->
    <div id="searchBar"></div>

    </div>

    <div id="contentBar">

      <div id="sideSection">

        <div id="welcomeUser">

          <? include("scripts/welcomeuser.php"); ?>

        </div>

      </div>

    <div id="mainSection">

<!--       <div id="tableSection">

      </div> -->


      <div id="editProfileSection">

        <center><div id="editPrompt">

          <p>Please enter additional information: </p>
          <p style="font-size: 0.8em;">Can re-enter information to update it</p>

        </div></center>

        <div id="uploadImage">

          <form action="scripts/upload.php" method="post" enctype="multipart/form-data">

            <input type="file" name="image" id="userImage" />

            <input type="submit" name="upload" id="upload" value=" Upload Image " />

          </form>

        </div>

        <center><div id="editProfileForm">

          <form action="scripts/addinformation.php" method="post" enctype="multipart/form-data">

            <!-- <input type="file" name="image" id="userImage" /><br /><br /> -->

<!--             <label for="firstName">First Name: </label><br /> -->
            <input type="text" name="firstname" placeholder="First Name" id="firstName" />

<!--             <label for="lastName">Last Name: </label><br /> -->
            <input type="text" name="lastname" placeholder="Last Name" id="lastName" /><br /><br />

<!--             <label for="age">Age: </label><br /> -->
            <input type="int" name="age" placeholder="Age" id="age" />

<!--             <label for="city">City: </label><br /> -->
            <input type="text" name="city" placeholder="City" id="city" /><br /><br />

<!--             <label for="birthday">Birthday: </label><br /> -->
            <input type="date" name="birthday" id="birthday" /><br /><br />

            <input type="submit" name="editSubmit" value="Submit" id="editProfileSubmit" />

          </form>

        </div></center>

      </div>

    </div>

    <div class="clear"></div>

    <!-- creates bottom-section bottom bar to house -->
    <div id="bottomBar">

      <div id="microMenuBar">

        <ul id="copyright">

          <li id="copyrightItem">CalicoCode &copy; 2015</li>

          <li id="copyrightItem">English (US) </li>

        </ul>

        <ul id="microMenu">

          <li class="microMenuItem"><a href="">Resources</a></li>

          <li class="microMenuItem"><a href="">Privacy Policy</a></li>

          <li class="microMenuItem"><a href="">FAQ</a></li>

          <li class="microMenuItem"><a href="contactus.php">Contact Us</a></li>

          <li class="microMenuItem"><a href="">Terms Of Use</a></li>

        </ul>

      </div>

    </div>

</body>

</html>