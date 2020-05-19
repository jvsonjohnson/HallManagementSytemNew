<?php
session_start();
$_SESSION['isLogged'] = FALSE;

if($_SESSION['isLogged'] === TRUE){
  header('Location: ../old-home.php');
}
?>

    <!DOCTYPE html>
    <html data-wf-page="5ddad863967a3b21c1340a08" data-wf-site="5dd89354578babc32818ce3f">

    <head>
        <meta charset="utf-8">
        <title>Preston Hall Management System</title>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="azph_hms.js" type="text/javascript"></script>
        <meta content="Admin" property="og:title">
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

        <div class="register">
            <h1> Resident Registration </h1>
            <div id="messagebox"></div>
            <div>
                <form>
                    <div>
                        <label for="IDnumber">Enter ID number:</label>
                        <input type="text" id="IDnumber" name='IDnumber'>
                    </div>
                    <div>
                        <label for="password">Enter Password:</label>
                        <input type="password" id="password" name='password'>
                    </div>
                    <div>
                        <label for="password">Enter Password again:</label>
                        <input type="password" id="password1" name='password1'>
                    </div>

                    <div>
                        <label for="clustername">Enter ClusterName:</label>
                        <input type="text" id="clustername" name='clustername'>
                    </div>

                    <div>
                        <label for="household">Enter Household:</label>
                        <input type="text" id="household" name='household'>
                    </div>


                </form>
                <button  id="submit-btn" class="btn-filled w-button">Submit</button>
            </div>

        </div>
        <img src="images/buildings-1.png" srcset="images/buildings-1-p-500.png 500w, images/buildings-1-p-800.png 800w, images/buildings-1.png 1137w" sizes="(max-width: 1137px) 100vw, 1137px" alt="" class="image">
        <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


    </body>




    </html>