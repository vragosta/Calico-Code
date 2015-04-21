<!-- include the php file -->
<? //include("logout.php"); ?>
<? include("scripts/hitcounter.php") ?>
<?php

session_start();

// echo "print session in index.php<br />";
// print_r($_SESSION); 
// echo "<br />";

if($_SESSION['error']) { 
 
  echo $_SESSION['error'];
  session_unset();
  session_destroy();
  
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

  <!-- GoogleFont Shadows Into Light -->
  <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>

  <!-- External Link to CSS -->
  <link rel="stylesheet" type="Text/css" href="css/indexstyles.css">

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
      
      <!-- creates login form, method: post -->
      <form action="scripts/login.php" method="post">

        <!-- creates LOG IN button -->
        <input type="submit" name="submit" value="Log In" class="loginBar" id="loginSubmit" />

        <!-- creates PASSWORD textarea -->
        <input type="password" name="loginPassword" placeholder="Password" class="loginBar" id="loginPassword" tabindex=2 />

        <!-- creates EMAIL textarea -->
        <input type="email" name="loginEmail" placeholder="Email" class="loginBar" id="loginEmail" tabindex=1 />

        <!-- creates label and remember me checkbox, box is initialized to be checked -->
        <label><input type="checkbox" name="rememberMe" id="checkbox" value="checked" checked="checked" /> <span style="font-weight: 100">Keep Me Logged In</span></label>

      <!-- END login form -->
      </form>

    <!-- END topbar div -->
    </div>

    <!-- creates mid-section content bar to house possible description and sign up form -->
    <div id="contentBar">

      <!-- creates "description", spaceholder for time being -->
<!--  <div id="spaceholder">

      </div> -->

<!--       <div id="talkBubble">

        <img src="images/dialoguebubble.png" width="90%" height="90%" />

      </div>
 -->
<!--       <div id="littleMan">

        <img src="images/img5a.png" width="100%" height="100%" />

      </div> -->

      <div id="littleMan2">

        <img src="images/img18b.png" width="100%" height="100%" />

      </div>

      <div id="siteMottoDiv">

        <p id="siteMotto">Provided for developers anywhere, everywhere, anytime and with any content.</p>

      </div>

      <div id="smiley">

        <img src="images/smiley1.png" width="100%" height="100%" />

      </div>

<!--       <div id="greetingBlockA">

      </div>

      <div id="greetingBlockB"> -->

        

<!--       </div> -->

        <!-- creates sign up div -->
        <div id="signUpBar">

          <!-- creates sign up prompt on top of sign up form, span from bold to normal -->
          <p id="signUpPrompt"><span style="font-weight: bold">New to Calico?</span> Join Today!</p>

          <!-- creates a sign up form, method: post -->
          <form action="scripts/signup.php" method="post">

            <!-- creates EMAIL textarea -->
            <input type="email" name="email" placeholder="Email" id="signUpEmail" /><br />

            <!-- creates a USERNAME textarea -->
            <input type="text" name="username" placeholder="Username" id="signUpUsername" /><br />
        
            <!-- creates PASSWORD textarea -->
            <input type="password" name="password" placeholder="Password" id="signUpPassword" /><br />

            <!-- creates SIGNUP button -->
            <input type="submit" name="submit" value="Sign Up" id="signUpSubmit" />

          <!-- END sign up form -->
          </form>

        <!-- END sign up div -->
        </div>

        <div class="clear"></div>

        <div id="downloadOptions">

          <center><p>Want to download and view your files?</p></center>

          <a href="http://store.apple.com/us"><img src="images/appStore.PNG" style="border-radius: 5px" /></a>

          <a href="https://play.google.com"><img src="images/googlePlay.PNG" style="border-radius: 5px" /></a>

        </div>
        
    <!-- END content bar div -->
    </div>

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

  <!-- END fixed width div -->
  </div>

</body>

</html>