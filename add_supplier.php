<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Add Customer</title>	
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/add_supplier.css">	
	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script  src="dist/js/jquery.ui.draggable.js"></script>
	<script src="dist/js/jquery.alerts.js"></script>
	<script src="dist/js/jquery.js"></script>
	<link rel="stylesheet"  href="dist/js/jquery.alerts.css" >
	<!-- jQuery & JS files -->
	<?php include_once("tpl/common_js.php"); ?>
	<script src="js/script.js"></script> 
	<script src="js/add_supplier.js"></script> 
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
				<li><a href="view_report.php" class="report-tab">Reports</a></li>
			</ul> <!-- end tabs -->
			<a href="#" id="company-branding-small" class="fr"><img src="#" alt="Point of Sale" /></a>			
		</div> <!-- end full-width -->
	</div> <!-- end header -->
	
	<!-- MAIN CONTENT -->
	<div id="content">		
		<div class="page-full-width cf">
			<div class="side-menu fl">				
				<h3>Suppliers Management</h3>
				<ul>
					<li><a href="add_supplier.php">Add Supplier</a></li>
					<li><a href="view_supplier.php">View Supplier</a></li>
				</ul>				                                  
			</div> <!-- end side-menu -->
			
			<div class="side-content fr">			
				<div class="content-module">				
					<div class="content-module-heading cf">					
						<h3 class="fl">Add Supplier</h3>
						<span class="fr expand-collapse-text">Click to collapse</span>
						<span class="fr expand-collapse-text initial-expand">Click to expand</span>					
					</div> <!-- end content-module-heading -->

					<div class="content-module-main cf">
						<form name="form1" method="post" id="form1" action="add_supplier_action.php">
                  
                  <p><strong>Add Supplier Details </strong> - Add New </p>
                  <table class="form"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><span class="man">*</span>Name:</td>
                      <td><input name="name" placeholder="ENTER YOUR FULL NAME" type="text" id="name" maxlength="200"  class="round default-width-input"  /></td>
                     <td>Contact 1 </td>
                      <td><input name="contact1" placeholder="ENTER YOUR ADDRESS contact1" type="text" id="buyingrate" maxlength="20"   class="round default-width-input" 
					  
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td><textarea name="address" placeholder="ENTER YOUR ADDRESS" cols="15" class="round full-width-textarea"></textarea></td>
                   <td>Cnic </td>
                      <td><input name="contact2" placeholder="ENTER YOUR CNIC" type="text" id="sellingrate" maxlength="20"  class="round default-width-input" 
					   /></td>
                    
                    </tr>
                   
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;
					 
					  </td>
                      <td>
                        <input  class="button round blue image-right ic-add text-upper" type="submit" name="Submit" value="Add">
						
					 <td>&nbsp;
					 
					  </td>  
					  <td align="right"><input class="button round red text-upper" type="reset" name="Reset" value="Reset"> </td>
                    </tr>

                  </table>
                </form>
						

               		</div> <!-- end content-module-main -->
				</div> <!-- end content-module -->
			</div>
		</div> <!-- end full-width -->
	</div> <!-- end content -->	
	
	<!-- FOOTER -->
	<div id="footer">
		<p> &copy;Copyright 2017</p>
	</div> <!-- end footer -->

</body>
</html>