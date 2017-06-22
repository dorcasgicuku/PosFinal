<?php
include_once("init.php");

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Alexandra Keen - Add User</title>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/style.css">

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style type="text/css">

        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            background-color: #FFFFFF;
        }

        * {
            padding: 0px;
            margin: 0px;
        }

        #vertmenu {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 100%;
            width: 160px;
            padding: 0px;
            margin: 0px;
        }

        #vertmenu h1 {
            display: block;
            background-color: #FF9900;
            font-size: 90%;
            padding: 3px 0 5px 3px;
            border: 1px solid #000000;
            color: #333333;
            margin: 0px;
            width: 159px;
        }

        #vertmenu ul {
            list-style: none;
            margin: 0px;
            padding: 0px;
            border: none;
        }

        #vertmenu ul li {
            margin: 0px;
            padding: 0px;
        }

        #vertmenu ul li a {
            font-size: 80%;
            display: block;
            border-bottom: 1px dashed #C39C4E;
            padding: 5px 0px 2px 4px;
            text-decoration: none;
            color: #666666;
            width: 160px;
        }

        #vertmenu ul li a:hover, #vertmenu ul li a:focus {
            color: #000000;
            background-color: #eeeeee;
        }

        .style1 {
            color: #000000
        }

        div.pagination {

            padding: 3px;

            margin: 3px;

        }

        div.pagination a {

            padding: 2px 5px 2px 5px;

            margin: 2px;

            border: 1px solid #AAAADD;

            text-decoration: none; /* no underline */

            color: #000099;

        }

        div.pagination a:hover, div.pagination a:active {

            border: 1px solid #000099;

            color: #000;

        }

        div.pagination span.current {

            padding: 2px 5px 2px 5px;

            margin: 2px;

            border: 1px solid #000099;

            font-weight: bold;

            background-color: #000099;

            color: #FFF;

        }

        div.pagination span.disabled {

            padding: 2px 5px 2px 5px;

            margin: 2px;

            border: 1px solid #EEE;

            color: #DDD;

        }


    </style>
    <!-- jQuery & JS files -->
    <?php include_once("tpl/common_js.php"); ?>
    <script src="js/script.js"></script>
    <script>
        /*$.validator.setDefaults({
         submitHandler: function() { alert("submitted!"); }
         });*/
        $(document).ready(function () {

            // validate signup form on keyup and submit
            $("#form1").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        maxlength: 200
                    },
                    password: {
                        minlength: 6,
                        maxlength: 500
                    },
                    password_confirmation: {
                        minlength: 6,
                        maxlength: 500
                    }
                },
                messages: {
                    name: {
                        required: "Please enter a Customer Name",
                        minlength: "Customer must consist of at least 3 characters"
                    },
                    password: {
                        minlength: "Use password must be at least 6 characters long",
                        maxlength: "Use password must be at least 6 characters long"
                    },
                      password_confirmation: {
                       minlength: "Use password must be at least 6 characters long",
                        maxlength: "Use password must be at least 6 characters long"
                    },
                }
            });

        });

    </script>

</head>
<body>

<!-- TOP BAR -->
<?php include_once("tpl/top_bar.php"); ?>
<!-- end top-bar -->


<!-- HEADER -->
<div id="header-with-tabs">

    <div class="page-full-width cf">

        <ul id="tabs" class="fl">
            <li><a href="dashboard.php" class="dashboard-tab">Dashboard</a></li>
            <li><a href="view_sales.php" class=" sales-tab">Sales</a></li>
            <li><a href="view_customers.php" class="active-tab customers-tab">Customers</a></li>
            <li><a href="view_purchase.php" class="purchase-tab">Purchase</a></li>
            <li><a href="view_supplier.php" class="  supplier-tab">Supplier</a></li>
            <li><a href="view_product.php" class="stock-tab">Stocks / Products</a></li>
            <!-- <li><a href="view_payments.php" class="payment-tab">Payments / Outstandings</a></li> -->
             <li><a href="add_user.php" class="active-tab customers-tab"> User </a></li>
            <li><a href="view_report.php" class="report-tab">Reports</a></li>
        </ul>
        <!-- end tabs -->

        <!-- Change this image to your own company's logo -->
        <!-- The logo will automatically be resized to 30px height. -->
        <a href="#" id="company-branding-small" class="fr"><img src="images/save.png"/></a>

    </div>
    <!-- end full-width -->

</div>
<!-- end header -->


<!-- MAIN CONTENT -->
<div id="content">

    <div class="page-full-width cf">

        <div class="side-menu fl">

            <h3>User Management</h3>
            <ul>
                <li><a href="add_user.php">Add User</a></li>
                <li><a href="view_user.php">View Users</a></li>
            </ul>

        </div>
        <!-- end side-menu -->

        <div class="side-content fr">

            <div class="content-module">

                <div class="content-module-heading cf">

                    <h3 class="fl">Add User</h3>
                    <span class="fr expand-collapse-text">Click to collapse</span>
                    <span class="fr expand-collapse-text initial-expand">Click to expand</span>

                </div>
                <!-- end content-module-heading -->

                <div class="content-module-main cf">


                    <?php
                    //Gump is libarary for Validatoin

                    if (isset($_POST['username'])) {
                        $_POST = $gump->sanitize($_POST);
                        $gump->validation_rules(array(
                            'username' => 'required|max_len,100|min_len,3',
                            'password' => 'max_len,200',
                            'user_type' => 'alpha_numeric|max_len,20',
                            'answer' => 'alpha_numeric|max_len,20'
                        ));

                        $gump->filter_rules(array(
                            'username' => 'trim|sanitize_string|mysqli_escape',
                            'password' => 'trim|sanitize_string|mysqli_escape',
                            'user_type' => 'trim|sanitize_string|mysqli_escape',
                            'answer' => 'trim|sanitize_string|mysqli_escape'
                        ));

                        $validated_data = $gump->run($_POST);
                        $username = "";
                        $password = "";
                        $user_type = "";
                        $answer = "";

                        if ($validated_data === false) {
                            echo $gump->get_readable_errors(true);
                        } else {


                            $username = mysqli_real_escape_string($db->connection, $_POST['username']);
                            $password = mysqli_real_escape_string($db->connection, $_POST['password']);
                            $user_type = mysqli_real_escape_string($db->connection, $_POST['user_type']);
                            $answer = mysqli_real_escape_string($db->connection, $_POST['answer']);

                            $count = $db->countOf("stock_user", "username='$username'");
                            if ($count == 1) {
                                echo "<div class='error-box round'>Duplicate Entry. Please Verify</div>";
                            } else {

                                if ($db->query("insert into stock_user values(NULL,'$username','$password','$user_type','$answer')"))
                                    echo "<div class='confirmation-box round'>[ $name ] User Details Added !</div>";
                                else
                                    echo "<div class='error-box round'>Problem in Adding !</div>";

                            }
                        }
                    }

                    ?>

                    <form name="form1" method="post" id="form1" action="">

                        <p><strong>Add User Details </strong> - Add New ( Control +A)</p>
                        <table class="form" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><span class="man">*</span> User Name:</td>
                                <td><input name="username" placeholder="ENTER YOUR USER NAME" type="text" id="username"  maxlength="200" class="round default-width-input"
                                           value="<?php echo isset($username) ? $username : ''; ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                 <td><span class="man">*</span> Password :</td>
                                <td><input name="password" placeholder="ENTER YOUR PASSWORD " type="password"
                                           id="password" maxlength="20" class="round default-width-input"
                                           value="<?php echo isset($password) ? $password : ''; ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                             <tr>
                                 <td><span class="man">*</span> Password Confirmation:</td>
                                <td><input name="password_confirmation" placeholder="CONFIRM YOUR PASSWORD " type="password"
                                           id="password_confirmation" maxlength="20" class="round default-width-input"
                                           value="<?php echo isset($password_confirmation) ? $password_confirmation : ''; ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                               
                                 <td><span class="man">*</span> What is your favourite movie?:</td>
                                <td><input name="contact2" placeholder="ENTER YOUR USER TYPE" type="text"
                                           id="sellingrate" maxlength="20" class="round default-width-input"
                                           value="<?php echo isset($user_type) ? $user_type : ''; ?>"/></td>

                            </tr>

                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                    &nbsp;
                                </td>
                                <td>
                                    <input class="button round blue image-right ic-add text-upper" type="submit"
                                           name="Submit" value="Add">
                                    (Control + S)
                                <td>
                                    &nbsp;
                                </td>
                                <td align="right"><input class="button round red text-upper" type="reset" name="Reset"
                                                         value="Reset"></td>
                            </tr>
                        </table>
                    </form>


                </div>
                <!-- end content-module-main -->


            </div>
            <!-- end content-module -->


        </div>
        <!-- end full-width -->

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