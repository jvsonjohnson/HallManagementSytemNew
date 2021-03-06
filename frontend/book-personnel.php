<?php
session_start();
require 'backend/classes.php';
if ($_SESSION['isLogged'] === FALSE) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['issueID']) && !empty($_POST['appDate']) && !empty($_POST['appTime'])) {
        $update_stat = new IssueController($data_store);
        $update_stat->BookAppointment($_POST['issueID'], $_POST['appDate'], $_POST['appTime']);
    }
}
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Nov 27 2019 21:03:53 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ddea24d63de4e1abb6724b4" data-wf-site="5dd89354578babc32818ce3f">

<head>
    <meta charset="utf-8">
    <title>View All Issues</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="azph_hms.js" type="text/javascript"></script>
    <meta content="View All Issues" property="og:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/az-preston-hall-management-system.webflow.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Roboto:100,300,300italic,regular,500,700,900"]
            }
        });
    </script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
</head>

<body>
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
        <div class="w-container">
            <nav role="navigation" class="w-nav-menu"><a href="admin.php" class="navbtn w-button">Back</a></nav><a href="admin.php" class="nav-link w-nav-link">Home</a><a href="index.php" class="nav-link w-nav-link">Sign Out</a>
            <div class="w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
        </div>
    </div>
    <div class="hero-section">
        <div class="column w-row">
            <div class="w-col w-col-6">
                <div class="hero-card">
                    <h2>AZ Preston Hall Management System</h2>
                    <h5>View All User Issues</h5>

                    <?php
                    $view_all = new IssueController($data_store);
                    $view_all->viewAllIssues();
                    ?>


                </div>
            </div>
            </>
            <div class="column w-row">
                <div class="w-col w-col-4">
                    <h5>Book Personnel</h5>
                    <div class="form w-form">
                        <form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix">
                            <label for="name">Enter Issue ID</label>
                            <input type="text" class="w-input" maxlength="256" name="ID-number" data-name="ID number" placeholder="Issue ID" id="ID-number-update" required="">
                            <label for="name">Enter Appointment Date</label>
                            <input type="date" class="w-input" maxlength="256" name="app-date" data-name="app date" placeholder="Appointment Date" id="app-date-update" required="">
                            <label for="name">Enter Appointment Time</label>
                            <input type="time" class="w-input" maxlength="256" name="app-time" data-name="app time" placeholder="Appointment Time" id="app-time-update" required="">
                            <input id="book-personnel" type="submit" value="Submit" data-wait="Please wait..." class="btn-filled blue w-button">
                        </form>
                    </div>
                </div>
            </div>

            <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
            <script src="js/webflow.js" type="text/javascript"></script>
            <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>

</html>