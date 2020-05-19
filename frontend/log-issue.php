<?php
session_start();
require 'backend/classes.php';
if($_SESSION['isLogged'] === FALSE){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sun Nov 24 2019 22:40:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ddadcb3967a3b0033342019" data-wf-site="5dd89354578babc32818ce3f">
<head>
  <meta charset="utf-8">
  <title>Log Issue</title>
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="azph_hms.js" type="text/javascript"></script>
  <meta content="Log Issue" property="og:title">
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
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="w-container">
      <nav role="navigation" class="w-nav-menu"><a href="old-home.php" class="navbtn w-button">Back</a></nav><a id="continue-button" class="nav-link w-nav-link">Home</a><a class="nav-link w-nav-link sign-out">Sign Out</a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="hero-section">
    <div class="form-columns w-row">
      <div class="w-col w-col-5">
        <div class="form-card">
          <h1>AZ Preston Hall Maintenance System</h1>
          <h5>&gt;&gt;Log Issue</h5>
          <div class="form w-form">
            <form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix"><input id="IDapp" type="text" class="w-input" maxlength="256" placeholder="id number" required=""><label for="name">Select your cluster</label><select id="cluster" name="cluster" required="" data-name="cluster" class="w-select"><option value="AMSTERDAM">Amsterdam</option><option value="BELGIQUE">Belgique</option><option value="BURGPLATZ">Burgplatz</option><option value="EINHEIT">Einheit</option><option value="ITALIA">Italia</option><option value="LA MAISON">La Maison</option><option value="LOS MATADORES">Los Matadores</option><option value="OLIMPIA">Olimpia</option><option value="PORTO SANTO">Porto Santo</option><option value="SHERWOOD MANOR">Sherwood Manor</option><option value="REGENSEN">Regensen</option><option value="SHAMROCK">Shamrock</option><option value="VIKINGS">Vikings</option></select><label for="name">Issue category</label><select id="classification" name="classification" required="" data-name="classification" class="w-select"><option value="ADMINISTRATIVE">Administrative</option><option value="APPLIANCE">Appliance</option><option value="ELECTRICAL">Electrical</option><option value="FURNITURE">Furniture</option><option value="INFRASTRUCTURE">Infrastructure</option><option value="PLUMBING">Plumbing</option><option value="ROOM FIXTURES">Room Fixtures</option></select><label for="Issue-description">Issue description</label><input type="text" class="description-field w-input" maxlength="256" name="Issue-description" data-name="Issue description" placeholder="Give a short description of the issue..." id="Issue-description" required="">
              <h6>All Fields are Mandatory</h6><input id="submit-issue" type="submit" value="Submit" data-wait="Please wait..." class="btn-filled blue w-button"></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-col w-col-7"><img src="images/form-pic.png" srcset="images/form-pic-p-500.png 500w, images/form-pic.png 750w" sizes="(max-width: 479px) 67vw, (max-width: 767px) 79vw, 48vw" alt=""></div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>