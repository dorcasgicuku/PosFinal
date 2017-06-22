<?php
include_once("init.php");

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Alexandra Keen- Dashboard</title>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/style.css">

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- jQuery & JS files -->
    <?php include_once("tpl/common_js.php"); ?>
    <script src="js/script.js"></script>
</head>
<body>

<!-- TOP BAR -->
<?php include_once("tpl/top_bar.php"); ?>
<!-- end top-bar -->


<!-- HEADER -->
<div id="header-with-tabs">

    <div class="page-full-width cf">

        <ul id="tabs" class="fl">
            <li><a href="dashboard.php" class="active-tab dashboard-tab">Dashboard</a></li>
            <li><a href="view_sales.php" class="sales-tab">Sales</a></li>
            <li><a href="view_customers.php" class=" customers-tab">Customers</a></li>
            <li><a href="view_purchase.php" class="purchase-tab">Purchase</a></li>
            <li><a href="view_supplier.php" class=" supplier-tab">Supplier</a></li>
            <li><a href="view_product.php" class=" stock-tab">Stocks / Products</a></li>
           <!--  <li><a href="view_payments.php" class="payment-tab">Payments / Outstandings</a></li> -->
           <li><a href="add_user.php" class="active-tab customers-tab"> User </a></li>
            <li><a href="view_report.php" class="report-tab">Reports</a></li>
        </ul>
        <!-- end tabs -->
        <!-- The logo will automatically be resized to 30px height. -->
        <?php $line = $db->queryUniqueObject("SELECT * FROM store_details ");
        $_SESSION['logo'] = $line->log;
        ?>
        <a href="#" id="company-branding-small" class="fr"><img src="images/save.png"/></a>

    </div>
    <!-- end full-width -->

</div>
<!-- end header -->


<!-- MAIN CONTENT -->
<div id="content">

    <div class="page-full-width cf">

        <div class="side-menu fl">

            <h3>Quick Links</h3>
            <ul>
             <li><a href="add_user.php">Add User</a></li>
                <li><a href="add_sales.php">Add Sales</a></li>
                <li><a href="add_purchase.php">Add Purchase</a></li>
                <li><a href="add_supplier.php">Add Supplier</a></li>
                <li><a href="add_customer.php">Add Customer</a></li>
                <li><a href="view_report.php">Report</a></li>
            </ul>

        </div>
        <!-- end side-menu -->

        <div class="side-content fr">

            <div class="content-module">

                <div class="content-module-heading cf">

                    <h3 class="fl">Our Products</h3>
                    <span class="fr expand-collapse-text">Click to collapse</span>
                    <span class="fr expand-collapse-text initial-expand">Click to expand</span>

                </div>
                <!-- end content-module-heading -->

                <div class="content-module-main cf">


                    <table style="width:350px; float:left;" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            
                               <!--  <p class="ourProduct" id="ourProduct">Our Products</p> -->
                                <tr>
                                    <td><img src="images/orange.jpg" alt="Orange" style="width:200px; height:200px; margin:0 30px 0 30px;"></td>
                                    <td><img src="images/apple.jpg" alt="Apples" style="width:200px; height:200px; margin:0 30px 0 30px;"></td>
                                    <td><img src="images/watermelon.jpg" alt="Apples" style="width:200px; height:200px;margin:0 50px 0 0;">
                                    <td><img src="images/watermelon.jpg" alt="Apples" style="width:200px; height:200px;margin:0 30px 0 30px;"></td>
                                </tr>
                                <tr>
                                    <td align="left">&nbsp;</td>
                                    <td align="left">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><img src="images/orange.jpg" alt="Orange" style="width:200px; height:200px; margin:0 30px 0 30px;"></td>
                                    <td><img src="images/apple.jpg" alt="Apples" style="width:200px; height:200px; margin:0 30px 0 30px;"></td>
                                    <td><img src="images/watermelon.jpg" alt="Apples" style="width:200px; height:200px;margin:0 50px 0 0;">
                                    <td><img src="images/watermelon.jpg" alt="Apples" style="width:200px; height:200px;margin:0 30px 0 30px;"></td>
                                </tr>
                                <tr>
                                    <td align="left">&nbsp;</td>
                                    <td align="left">&nbsp;</td>
                                </tr>
                                <tr>
                                   <td><img src="images/orange.jpg" alt="Orange" style="width:200px; height:200px; margin:0 30px 0 30px;"></td>
                                    <td><img src="images/apple.jpg" alt="Apples" style="width:200px; height:200px; margin:0 30px 0 30px;"></td>
                                    <td><img src="images/watermelon.jpg" alt="Apples" style="width:200px; height:200px;margin:0 50px 0 0;">
                                    <td><img src="images/watermelon.jpg" alt="Apples" style="width:200px; height:200px;margin:0 30px 0 30px;"></td>
                                </tr>
                                <tr>
                                    <td align="left">&nbsp;</td>
                                    <td align="left">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="left">&nbsp;</td>
                                    <td align="left">&nbsp;</td>
                                </tr>
                            </td>
                        </tr>
                        
                        <th>Statistics</th>
                        <tr>
                            <td width="250" align="left">&nbsp;</td>
                            <td width="150" align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">Total Number of Products</td>
                            <td align="left"><?php echo $count = $db->countOfAll("stock_avail"); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">Tatal Sales Transactions</td>
                            <td align="left"><?php echo $count = $db->countOfAll("stock_sales"); ?></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">Total number of Suppliers</td>
                            <td align="left"><?php echo $count = $db->countOfAll("supplier_details"); ?></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">Total Number of Customers</td>
                            <td align="left"><?php echo $count = $db->countOfAll("customer_details"); ?></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                     </table> 
                </div>
                <!-- end content-module-main -->


            </div>
            <!-- end content-module -->


        </div>
        <!-- end full-width -->

    </div>
</div>


<!-- FOOTER -->
<div id="footer">
   <p>For Any Queries email to <a href="mailto:alexandra.posnic@gmail.com?subject=Stock%20Management%20System"> 
        alexandra@gmail.com</a>.
    </p>
</div>
<!-- end footer -->
</body>
</html>