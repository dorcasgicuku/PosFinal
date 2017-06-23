<?php
session_start();

if (!defined('posnicEntry')) {
    define('posnicEntry', true);
}
if (isset($_SESSION['username'])) {
    if ($_SESSION['usertype'] == 'admin') {
        header("location: dashboard.php"); // Re-direct to index.php
    }
    //  if ($_SESSION['usertype'] == 'sales') {
    //     header("location: Sales.php"); // Re-direct to index.php
    // }
    

}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Alexandra Keen PoS- Login to Control Panel</title>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cmxform.css">
    <link rel="stylesheet" href="js/lib/validationEngine.jquery.css">

    <!-- Scripts -->
    <script src="js/lib/jquery.min.js" type="text/javascript"></script>
    <script src="js/lib/jquery.validate.min.js" type="text/javascript"></script>

    <script>
       
        $(document).ready(function () {

            // validate signup form on keyup and submit
            $("#login-form").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 3
                    },
                    password: {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    username: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 3 characters"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 3 characters long"
                    }
                }
            });

        });

    </script>

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<!--    Only Index Page for Analytics   -->

<!-- TOP BAR -->
<div id="top-bar">

    <div class="page-full-width">

        <!--<a href="#" class="round button dark ic-left-arrow image-left ">See shortcuts</a>-->

    </div>
    <!-- end full-width -->

</div>
<!-- end top-bar -->


<!-- HEADER -->
<div id="header">

    <div class="page-full-width cf">

        <div id="login-intro" class="fl">

            <h1>Alexandra Keen</h1>
            <h5>Inspired by nature, Driven by Passion</h5>

        </div>
        <!-- login-intro -->

        <!-- The logo will automatically be resized to 39px height. -->
        <a href="#" id="company-branding" class="fr"><img src="images/save.png"/></a>

    </div>
    <!-- end full-width -->

</div>
<!-- end header -->

<!-- MAIN CONTENT -->
<div id="content">

    <form action="checklogin.php" method="POST" id="login-form" class="cmxform" autocomplete="off">

        <fieldset>
            <p> <?php

                if (isset($_REQUEST['msg']) && isset($_REQUEST['type'])) {

                    if ($_REQUEST['type'] == "error")
                        $msg = "<div class='error-box round'>" . $_REQUEST['msg'] . "</div>";
                    else if ($_REQUEST['type'] == "warning")
                        $msg = "<div class='warning-box round'>" . $_REQUEST['msg'] . "</div>";
                    else if ($_REQUEST['type'] == "confirmation")
                        $msg = "<div class='confirmation-box round'>" . $_REQUEST['msg'] . "</div>";
                    else if ($_REQUEST['type'] == "information")
                        $msg = "<div class='information-box round'>" . $_REQUEST['msg'] . "</div>";

                    echo $msg;
                }
                ?>

            </p>

            <p>
                <label for="login-username">username</label>
                <input type="text" id="login-username" class="round full-width-input" placeholder="admin"
                       name="username" autofocus/>
            </p>

            <p>
                <label for="login-password">password</label>
                <input type="password" id="login-password" name="password" placeholder="admin"
                       class="round full-width-input"/>
            </p>

            <a href="forget_pass.php" class="button ">Forgot your password?</a>

            <!--<a href="dashboard.php" class="button round blue image-right ic-right-arrow">LOG IN</a>-->
            <input type="submit" class="button round blue image-right ic-right-arrow" name="submit" value="LOG IN"/>
        </fieldset>

        <br/>

        <div class="information-box round">Just click on the "LOG IN" button to continue.
        </div>

    </form>

</div>
<!-- end content -->

<!-- FOOTER -->
<div id="footer">
   <p>For Any Queries email to <a href="mailto:alexandra.posnic@gmail.com?subject=Stock%20Management%20System"> 
        alexandra@gmail.com</a>.
    </p>
</div>
<!-- end footer -->
</body>
</html>