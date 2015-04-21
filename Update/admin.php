<?php
  
  //MUST HAVE SESSION_START HERE!!
  session_start();

  if(!isset($_SESSION['name'])) {
    header('Location: http://79.170.40.36/rhapthorne.com/project/index.php');
  }
  // echo "session starts here for admin.php<br />print session in admin.php<br />";
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
  <title>CalicoCode</title>

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
  <link rel="stylesheet" type="Text/css" href="css/adminstyles.css">

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

          <li class="menuItem"><a href="texteditor.php">Calico Text Editor</a></li>

          <li class="menuItem"><a href="">Chat</a></li>

          <li class="menuItem"><a href="scripts/logout.php">Log Out</a></li>

        </ul>

      </div>

    <!-- create a search bar when ready -->
    <div id="searchBar"></div>

    </div>

    <div id="contentBar">

      <div id="sideSection">

        <div id="welcomeUser">

          <? include("scripts/welcomeuser.php"); ?>

          <!-- consider creating more of these guys -->
<!--           <div id="littleMan">

            <img src="images/img8a.png" height="150" width="130" />

          </div> -->
          
        </div>

      </div>

    <div id="mainSection">

      <div id="adminSection">

        <!-- <p><center>Please select an Administrative Tool: </center></P> -->

        <center><iframe width="90%" height="300px" style="background-color: #494949; border-radius: 10px; margin-top: 20px;" name="adminFrame" ></iframe></center>

        <p><center>Please select an Administrative Tool: </center></P>

        <ul id="adminList">

          <li class="adminItem"><center><a href="scripts/viewusers.php" target="adminFrame">View Users</a></center></li>

          <li class="adminItem"><center><a href="scripts/updateusers.php" target="adminFrame">Update Users</a></center></li>         

          <li class="adminItem"><center><a href="scripts/addusers.php" target="adminFrame">Add Users</a></center></li>

          <li class="adminItem"><center><a href="scripts/deleteusers.php" target="adminFrame">Delete Users</a></center></li>

        </ul>

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

</body>

</html>