<?php

  //MUST HAVE SESSION_START HERE!!!
  session_start();

  // echo "session starts here for contactus.php<br />print session in contactus.php<br />";
  // print_r($_SESSION);
  // echo "<br />";

  if($_POST['submit']=="Send") {

    $emailBody = $_POST['emailBody'];
    $contactEmail = $_POST['contactEmail'];

    mail("allchenzo@gmail.com", "Contact Us", $emailBody, $contactEmail);

  }

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
  <link rel="stylesheet" type="Text/css" href="css/contactusstyles.css">

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

          <li class="menuItem"><a href="scripts/logout.php">Logout</a></li>

        </ul>

      </div>

    <!-- create a search bar when ready -->
    <div id="searchBar"></div>

    </div>

    <div id="contentBar">

      <div id="sideSection"></div>

    <div id="mainSection">

        <div id="emailSection">

          <p>Please contact us with any concerns or questions.  We have a team that is always available to answer with any technical issues. Please allow up to 24 hours for the email to process.</p>

          <h3>To: Admin</h3>

          <!-- consider making this direct to homepage -->
          <form action="contactus.php" method="post">

            <input type="email" name="contactEmail" placeholder="Your Email" id="contactUsEmail" /><br /><br />

            <textarea name="emailBody" rows="15" cols="100" placeholder="Email Body" maxlength="250" style="color: #303030"></textarea>

            <!-- creates LOG IN button -->
            <input type="submit" name="submit" value="Send" id="emailSubmit" />

          </form>

        </div>

    </div>

    <div class="clear"></div>

    <!-- creates bottom-section bottom bar to house -->
    <div id="bottomBar">

      <div id="microMenuBar">

        <ul id="copyright">

          <li id="copyrightItem">CalicoCode &copy; 2015</li>

          <li id="copyrightItem">English (US)</li>

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