<?php

  session_start();

  if(!isset($_SESSION['name'])) {
    header('Location: http://79.170.40.36/rhapthorne.com/project/index.php');
  }
  
//  echo "print session in home.php<br />";
//  print_r($_SESSION);
//  echo "<br />";

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
  <link rel="stylesheet" type="Text/css" href="css/homestyles.css">

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

        </div>

      </div>

    <div id="mainSection">

      <div id="blockOneA">

        <!-- <h2>Updates Here..</h2> -->
        <!-- calls in the diagnostics to be placed in the main section -->
        <? //include("homediagnostics.php"); ?>
        <h3 id="updates">Latest.<span style="color: #1af0ca">Updates</span>      

      </div>

      <div id="blockOneB">



      </div>

<!--       <div id="talkBubble">

        <img src="images/dialoguebubble.png" width="90%" height="90%" />

      </div> -->

      <div id="littleMan">

        <img src="images/img14a.png" width="100%" height="100%" />

      </div>

      <!-- <div id="blockTwo"> -->

      <!-- <h2>News Here...</h2> -->        

      <!-- </div> -->

      <div id="blockThreeA">

        <h3 id="recentUpdates">Recent.<span style="color: #1af0ca">Posts</span></h3>

      </div>

      <div id="blockThreeB">



      </div>

      <div id="blockFourA">

        <h3 id="recentUpdates">Recent.<span style="color: #1af0ca">Code</span></h3>

      </div>

      <div id="blockFourB">

        <p style="padding-left: 25px; margin-top: 12px;">Project File: <a href="" style="text-decoration: none; color: #1af0ca;">Project Name</a></p>

        <p style="padding-left: 25px; margin-top: 12px;">Text File: <a href="" style="text-decoration: none; color: #1af0ca;">Filename</a></p>

        <p style="padding-left: 25px">Description: <span style="color: #1af0ca;">File Decription</span></p>

      </div>

      <!-- <div id="blockFive"> -->

        <!-- <h2>News Here...</h2> -->

      <!-- </div>       -->

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