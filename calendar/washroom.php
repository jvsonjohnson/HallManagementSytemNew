<?php
session_start();
require '../frontend/backend/classes.php';
#echo "<script>console.log('From old home: " . $_SESSION['isLogged'] ."')</script>";
if($_SESSION['isLogged'] === FALSE){
  header('Location: index.php');
}
?>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Calendar</title>
    <link rel="stylesheet" type='text/css' href='./themes/standard.css'/>
	 <style type="text/css">
	.mfp-list-view.standard .mfp-header-group {
	  width: auto;
	  padding: 0px 5px;
	}
	</style>


  </head>
  <body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="w-container">
      <nav role="navigation" class="w-nav-menu"><a href="../frontend/old-home.php" class="navbtn w-button">Back</a></nav><a href="../frontend/old-home.php" class="nav-link w-nav-link">Home</a> <a href="../frontend/index.php" class="nav-link w-nav-link">Sign Out</a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
    <div id="content" style="top:60px; bottom:24px;">
      <div style="position: absolute; width: 800px; height: 600px";>
        <div id="calendar" style="height: 100%; width:100%"></div>
      </div>
    </div>

    <script data-main="JS/main.js" src="JS/require.js"></script>
  </body>
</html>
