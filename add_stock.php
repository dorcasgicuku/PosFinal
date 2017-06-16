<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Add Stock Details</title>	
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/add_customer_style.css">	
	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script  src="dist/js/jquery.ui.draggable.js"></script>
	<script src="dist/js/jquery.alerts.js"></script>
	<script src="dist/js/jquery.js"></script>
	<link rel="stylesheet"  href="dist/js/jquery.alerts.css" ><
	<!-- jQuery & JS files -->
	<?php include_once("tpl/common_js.php"); ?>
	<script src="js/script.js"></script> 
	<script src="js/add_customer.js"></script> 
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
				<h3>Stock Management</h3>
				<ul>
					<li><a href="add_stock.php">Add Stock/Product</a></li>
					<li><a href="view_product.php">View Stock/Product</a></li>
					<li><a href="add_category.php">Add Stock Category</a></li>
					<li><a href="view_category.php">view Stock Category</a></li>
                    <li><a href="view_stock_availability.php">view Stock Available</a></li>
                </ul> 				                                  
			</div> <!-- end side-menu -->
			
			<div class="side-content fr">			
				<div class="content-module">				
					<div class="content-module-heading cf">					
						<h3 class="fl">Add Stock</h3>
						<span class="fr expand-collapse-text">Click to collapse</span>
						<span class="fr expand-collapse-text initial-expand">Click to expand</span>					
					</div> <!-- end content-module-heading -->

					<div class="content-module-main cf">
						<form name="form1" method="post" id="form1" action="add_stock_action.php">
                  			<table class="form"  border="0" cellspacing="0" cellpadding="0">
                    			<tr>                          			
                      				<td><span class="man">*</span> Stock ID:</td>
                      				<td><input name="stockid" placeholder="ENTER STOCK ID" type="text" id="stockid" maxlength="200"  class="round default-width-input"  /></td>                         
                      				<td><span class="man">*</span> Stock Name:</td>
                      				<td><input name="name" placeholder="ENTER CATEGORY NAME" type="text" id="name" maxlength="200"  class="round default-width-input"  /></td>                       
                    			</tr>
                    			<tr>                          			
                      				<td><span class="man">*</span> Stock Quantity:</td>
                      				<td><input name="stockqty" placeholder="ENTER STOCK ID" type="text" id="stockqty" maxlength="200"  class="round default-width-input"  /></td>                         
                      				<td><span class="man">*</span> Stock Category:</td>
                      				<td><input name="stockCat" placeholder="ENTER CATEGORY NAME" type="text" id="name" maxlength="200"  class="round default-width-input"  /></td>                       
                    			</tr>
                    			<tr>
                      				<td><span class="man">*</span>Buying Price:</td>
                      				<td><input name="cost" placeholder="ENTER COST PRICE" type="text" id="cost"  maxlength="200"  class="round default-width-input"  />
                      				</td>                       
                      				<td><span class="man">*</span>Selling Price:</td>
                      				<td><input name="sell" placeholder="ENTER SELLING PRICE" type="text" id="sell" maxlength="200"  class="round default-width-input"  />
                      				</td>                       
                    			</tr>
                    			<tr>
                      				<td>Supplier:</td>
                      				<td><input name="supplier" placeholder="ENTER SUPPLIER NAME" type="text" id="supplier"  maxlength="200"  class="round default-width-input" /></td>
                       
                      				<td>Category:</td>
                      				<td><input name="category" placeholder="ENTER CATEGORY NAME" type="text" id="category" maxlength="200"  class="round default-width-input" /></td>
                    			</tr>                   
                    			<tr>
                      				<td>&nbsp;</td>
                      				<td>&nbsp;</td>
                    			</tr>
                    			<tr>
                      				<td>&nbsp;</td>
                      				<td>
                        			<input  class="button round blue image-right ic-add text-upper" type="submit" name="Submit" value="Add">
					  				<td align="right"><input class="button round red   text-upper"  type="reset" name="Reset" value="Reset"> </td>
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