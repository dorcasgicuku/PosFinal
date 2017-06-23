<?php
include_once("init.php");

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Alexandra Keen - Update Supplier</title>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/style.css">

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- jQuery & JS files -->
    <?php include_once("tpl/common_js.php"); ?>
    <script src="js/script.js"></script>
    <script>
        
        $(document).ready(function () {

            // validate signup form on keyup and submit
            $("#form1").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        maxlength: 200
                    },

                    cost: {
                        required: true

                    },
                    sell: {
                        required: true

                    }
                },
                messages: {
                    name: {
                        required: "Please enter a Stock Name",
                        minlength: "Stock must consist of at least 3 characters"
                    },
                    cost: {
                        required: "Please enter a cost Price"
                    },
                    sell: {
                        required: "Please enter a Sell Price"
                    }
                }
            });

        });
        function numbersonly(e) {
            var unicode = e.charCode ? e.charCode : e.keyCode
            if (unicode != 8 && unicode != 46 && unicode != 37 && unicode != 38 && unicode != 39 && unicode != 40) { //if the key isn't the backspace key (which we should allow)
                if (unicode < 48 || unicode > 57)
                    return false
            }
        }
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
            <li><a href="view_sales.php" class="sales-tab">Sales</a></li>
            <li><a href="view_customers.php" class=" customers-tab">Customers</a></li>
            <li><a href="view_purchase.php" class="purchase-tab">Purchase</a></li>
            <li><a href="view_supplier.php" class=" supplier-tab">Supplier</a></li>
            <li><a href="view_product.php" class="active-tab stock-tab">Stocks / Products</a></li>
            <!-- <li><a href="view_payments.php" class="payment-tab">Payments / Outstandings</a></li> -->
            <li><a href="add_user.php" class="active-tab customers-tab"> User </a></li>
            <li><a href="view_report.php" class="report-tab">Reports</a></li>
        </ul>
        <!-- end tabs -->
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
            <h3>Stock Management</h3>
            <ul>
                <li><a href="add_stock.php">Add Stock/Product</a></li>
                <li><a href="view_product.php">View Stock/Product</a></li>
                <li><a href="add_category.php">Add Stock Category</a></li>
                <li><a href="view_category.php">view Stock Category</a></li>
                <li><a href="view_stock_availability.php">view Stock Available</a></li>
            </ul>
        </div>
        <!-- end side-menu -->
        <div class="side-content fr">
            <div class="content-module">
                <div class="content-module-heading cf">
                    <h3 class="fl">Update Stock</h3>
                    <span class="fr expand-collapse-text">Click to collapse</span>
                    <span class="fr expand-collapse-text initial-expand">Click to expand</span>
                </div>
                <!-- end content-module-heading -->
                <div class="content-module-main cf">
                    <form name="form1" method="post" id="form1" action="">
                        <p><strong>Update Stock Details </strong> - Add New </p>
                        <table class="form" border="0" cellspacing="0" cellpadding="0">
                            <?php
                            if (isset($_POST['id'])) {

                                $id = mysqli_real_escape_string($db->connection, $_POST['id']);
                                $name = mysqli_real_escape_string($db->connection, $_POST['name']);
                                $stockid = mysqli_real_escape_string($db->connection, $_POST['stockid']);
                                $quantity = mysqli_real_escape_string($db->connection, $_POST['quantity']);
                                $sell = mysqli_real_escape_string($db->connection, $_POST['sell']);
                                $cost = mysqli_real_escape_string($db->connection, $_POST['cost']);
                                $supplier = mysqli_real_escape_string($db->connection, $_POST['supplier']);
                                $category = mysqli_real_escape_string($db->connection, $_POST['category']);
                            


                                if ($db->query("UPDATE stock_details  SET stock_name ='$name', stock_quatity='$quantity', supplier_id='$supplier',company_price='$cost',selling_price='$sell',category='$category' where id=$id"))
                                    echo "<br><font color=green size=+1 > [ $name ] Stock Details Updated!</font>";
                                else
                                    echo "<br><font color=red size=+1 >Problem in Updating !</font>";
                            }
                            ?>
                            <?php
                            if (isset($_GET['sid']))
                                $id = $_GET['sid'];

                            $line = $db->queryUniqueObject("SELECT * FROM stock_details WHERE id=$id");
                           
                            ?>
                            <form name="form1" method="post" id="form1" action="">

                                <input name="id" type="hidden" value="<?php echo $_GET['sid']; ?>">
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Stock ID</td>
                                    <td><input name="stock_id" type="text" readonly="readonly" id="name" maxlength="200"
                                               class="round default-width-input"
                                               value="<?php echo $line->stock_id; ?> "/>
                                    </td>
                                    <td>Stock Quantity</td>
                                    <td><input name="quantity" type="text"  id="name" maxlength="200"
                                               class="round default-width-input"
                                               value="<?php echo $line->stock_quatity; ?> "/>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td> Stock Name</td>
                                    <td><input name="name" type="text" id="name" maxlength="200"
                                               class="round default-width-input"
                                               value="<?php echo $line->stock_name; ?> "/></td>
                                    <td>Category</td>
                                    <td><input name="category" type="text" id="category" maxlength="20"
                                               class="round default-width-input"
                                               value="<?php echo $line->category; ?>"/></td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Cost</td>
                                    <td><input name="cost" type="text" id="cost" maxlength="20"
                                               class="round default-width-input"
                                               value="<?php echo $line->company_price; ?>"
                                               onkeypress="return numbersonly(event)"/></td>
                                    <td>Selling Price</td>
                                    <td><input name="sell" type="text" id="selling" maxlength="20"
                                               class="round default-width-input"
                                               value="<?php echo $line->selling_price; ?>"
                                               onkeypress="return numbersonly(event)"/></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Supplier Name</td>
                                    <td><input name="supplier" type="text" id="supplier" maxlength="20"
                                               class="round default-width-input"
                                               value="<?php echo $line->supplier_id; ?>"/></td>
                                    
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <input class="button round blue image-right ic-add text-upper" type="submit"
                                               name="Submit" value="Save">
                                        (Control + S)
                                    </td>
                                    <td align="right"><input class="button round red   text-upper" type="reset"
                                                             name="Reset" value="Reset">
                                    </td>
                                    <td>&nbsp;</td>
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