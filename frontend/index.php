<?php
session_start();
$_SESSION['isLogged'] = FALSE;

if($_SESSION['isLogged'] === TRUE){
  header('Location: ../old-home.php');
}
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Nov 26 2019 09:23:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ddad863967a3b21c1340a08" data-wf-site="5dd89354578babc32818ce3f">
<head>
  <meta charset="utf-8">
  <title>Preston Hall Management System</title>
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="azph_hms.js" type="text/javascript"></script>
  <meta content="Admin" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/az-preston-hall-management-system.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Roboto:100,300,300italic,regular,500,700,900"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div id="alertbox"></div>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="w-container">
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="hero-section">
    <div id="loginform" class="log-in-form">
      <h3>Log In to AZ Preston HMS</h3>
      <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form">
          <label for="name">ID number:</label>
          <input type="text" class="w-input" maxlength="256" name="name" data-name="Name" id="name">
          <label for="email">Password:</label>
          <input type="password" class="w-input" maxlength="256" name="email" data-name="Email" id="email" required="">
          <input type="submit" value="Login" data-wait="Please wait..." class="submit-button w-button">
          </form>
        <div class="w-form-done">
          <div>Log in Succesful!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
    <div class="log-in-card">
      <h3>Welcome to the</h3>
      <h2>AZ Preston Hall Maintenance System</h2>
      <h5>Log in as a:</h5><a id="adminbtn" class="btn-filled w-button">Admin</a><a id="residentbtn" href="#loginform" class="btn-filled w-button">Resident</a></div>
  </div><img src="images/buildings-1.png" srcset="images/buildings-1-p-500.png 500w, images/buildings-1-p-800.png 800w, images/buildings-1.png 1137w" sizes="(max-width: 1137px) 100vw, 1137px" alt="" class="image">
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>