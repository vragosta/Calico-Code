<?php

  session_start();

  if(!isset($_SESSION['name'])) {
    header('Location: http://79.170.40.36/rhapthorne.com/project/index.php');
  }

?>

 <!DOCTYPE html>
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

  <link rel="stylesheet" type="text/css" href="codemirror-5.1/lib/codemirror.css">

  <!-- External Link to CSS -->
  <link rel="stylesheet" type="Text/css" href="css/texteditorstyles.css">

  <!-- Calico Icon Link -->
  <link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico">

  <script src="codemirror-5.1/lib/codemirror.js"></script>
  <script src="codemirror-5.1/mode/clike/clike.js"></script>
  <script src="codemirror-5.1/mode/javascript/javascript.js"></script>
  <script src="codemirror-5.1/keymap/sublime.js"></script>
  <script src="codemirror-5.1/mode/css/css.js"></script>

 </head>
 
 <body>
  
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

      <div id="clear"></div>

      <div id="mainSection">

        <div id="dropDown">

          <select id ="syntax">

            <option value ="clike">C/C++</option>

            <option value ="clike">C#</option>

            <option value ="css">CSS</option>

            <option value ="clike">Java</option>

            <option value ="javascript">Javascript</option>

          </select>

        </div>
     
        <div id="container">

          <form action="texteditor.php" method="post">

            <textarea id="codeMirror" name="textEditor"></textarea>

            <input type="submit" name="savefile" value="Save File" id="saveFile" />

          </form>

        </div>

      </div>

    </div>

    <div class="clear"></div>

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

  </div>
 
  <script>
    var codeMirror = CodeMirror.fromTextArea(document.getElementById("codeMirror"),{
      value: "Hello World",
      mode: "clike", //The default start
      lineNumbers: "true",
      showCursorWhenSelecting: "true",
      keymap: "sublime"
 
      });
      //In orer for this to work completely, we need the php funciton
      $(document).ready(function(){
        $("#syntax").change(function(){
          // var changedSyntax = $("#syntax").val();
          codeMirror.setOption("mode", $(this).val());
          //alert(changedSyntax);
        })
      })
     </script>
 
 </body>

 </html>