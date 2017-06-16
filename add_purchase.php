<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Add Purchase</title>	
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/date_pic/date_input.css">
    <link rel="stylesheet" href="lib/auto/css/jquery.autocomplete.css">	
	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="js/add_purchase.js">
	<!-- jQuery & JS files -->
	<?php include_once("tpl/common_js.php"); ?>
	<script src="js/script.js"></script>  
    <script src="js/date_pic/jquery.date_input.js"></script>  
    <script src="lib/auto/js/jquery.autocomplete.js "></script>  
    <script type="text/javascript"></script>
</head>
<body>
	<!-- TOP BAR -->
	<?php include_once("tpl/top_bar.php"); ?>
	<?php include_once("dist/bootstrap.php"); ?>
	<!-- end top-bar -->
	
	<!-- HEADER -->
	<div id="header-with-tabs">		
		<div class="page-full-width cf">	
			<ul id="tabs" class="fl">
				<li><a href="dashboard.php" class="dashboard-tab">Dashboard</a></li>
				<li><a href="view_sales.php" class="sales-tab">Sales</a></li>
				<li><a href="view_customers.php" class=" customers-tab">Customers</a></li>
				<li><a href="view_purchase.php" class="active-tab purchase-tab">Purchase</a></li>
				<li><a href="view_supplier.php" class=" supplier-tab">Supplier</a></li>
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
				<h3>Purchase Management</h3>
				<ul>
					<li><a href="add_purchase.php">Add Purchase</a></li>
					<li><a href="view_purchase.php">View Purchase </a></li>
				</ul>				                                                                
			</div> <!-- end side-menu -->
			
			<div class="side-content fr">			
				<div class="content-module">				
					<div class="content-module-heading cf">					
						<h3 class="fl">Add Purchase</h3>
						<span class="fr expand-collapse-text">Click to collapse</span>
						<span class="fr expand-collapse-text initial-expand">Click to expand</span>					
					</div> <!-- end content-module-heading -->
					
					<div class="content-module-main cf">
						<form name="form1" method="post" id="form1" action="">
                            <input type="hidden" id="posnic_total" >
                            <input type="hidden" id="roll_no" value="1" >
            				<div class="mytable_row ">
                  				<table class="form"  border="0" cellspacing="0" cellpadding="0">
                    				<tr>                               
                      					<td>Stock ID:</td>
                      					<td><input name="stockid" type="text" id="stockid"  maxlength="200"  class="round default-width-input" style="width:130px "  /></td>                       
                      					<td>Date:</td>
                      					<td><input  name="date" placeholder="" value="<?php echo date('d-m-Y');?>" type="text" id="name" maxlength="200"  class="round default-width-input"  /></td>
                      					<td><span class="man">*</span>Bill No:</td>
                      					<td><input name="bill_no" placeholder="ENTER BILL NO" type="text" id="bill_no" maxlength="200"  class="round default-width-input" style="width:120px " /></td>
                    				</tr>
                    				<tr>
                      					<td><span class="man">*</span>Supplier:</td>
                      					<td><input name="supplier" placeholder="ENTER SUPPLIER" type="text" id="supplier"  maxlength="200"  class="round default-width-input"  style="width:130px " /></td>                       
                      					<td>Address:</td>
                      					<td><input name="address" placeholder="ENTER ADDRESS" type="text" id="address" maxlength="200"  class="round default-width-input"  /></td>
                      					<td>Contact:</td>
                      					<td><input name="contact" placeholder="ENTER CONTACT" type="text" id="contact1" maxlength="200"  class="round default-width-input" onkeypress="return numbersonly(event)" style="width:120px " /></td>
                    				</tr>
                  				</table>
            				</div><br>
                            <div align="center">
                  				<input type="hidden" id="guid">
                  				<input type="hidden" id="edit_guid">
                  				<table class="form" >
                      				<tr><td>&nbsp;</td>
                          				<td>Item:</td>
                          				<td>Quantity:</td>
                          				<td>Cost:</td>
                          				<td>Selling:</td>
                          				<td>Available Stock:</td>
                          				<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total</td>
                           				<td>&nbsp; </td>
                      				</tr>
                       	 			<tr>
                						<td>&nbsp;</td>
                        				<td><input name=""  type="text" id="item"  maxlength="200"  class="round default-width-input " style="width: 150px"   /></td>
                       
                        				<td><input name=""  type="text" id="quty"  maxlength="200"   class="round default-width-input my_with" onKeyPress="quantity_chnage(event);return numbersonly(event);" onkeyup="total_amount();unique_check()"    /></td>
                     
                      					<td><input name=""  type="text" id="cost" readonly maxlength="200"  class="round default-width-input my_with"   /></td>
                      
                     					<td><input name=""  type="text" id="sell" readonly maxlength="200"  class="round default-width-input my_with"   /></td>
                      					<td><input name=""  type="text" id="stock" readonly maxlength="200"  class="round  my_with"   /></td>
                      					<td><input name=""  type="text" id="total" maxlength="200"  class="round default-width-input " style="width:120px;  margin-left: 20px"  /></td>
                      					<td><input type="button" onclick="add_values()" onkeyup=" balance_amount();" id="add_new_code"  style="margin-left:30px; width:30px;height:30px;border:none;background:url(images/add_new.png)" class="round"> </td>
                    				</tr>
                  				</table>
                         		<div style="overflow:auto ;max-height:300px;  ">
                           			<table class="form" id="item_copy_final"  style="margin-left:45px ">
                    				</table>
                   				</div>
                            </div>
                      		<div class="mytable_row ">
                  				<table class="form">
                    				<tr> 
                    					<td>&nbsp; </td>
                        				<td>Payment:<input type="text"  class="round" onkeyup=" balance_amount(); " onkeypress="return numbersonly(event);"  name="payment" id="payment" ></td>
                      					<td>&nbsp; </td>
                      					<td>Balance:<input type="text"  class="round" id="balance" readonly name="balance" ></td>
                      					<td>&nbsp; </td>
                      					<td>&nbsp; </td><td>&nbsp; </td><td>&nbsp; </td><td>&nbsp; </td>
                       					<td>Grand Total:<input type="hidden" readonly id="grand_total" name="subtotal" > <input type="text" id="main_grand_total" class="round default-width-input" onkeypress="return numbersonly(event)" readonly style="text-align:right;width: 120px" name="grand_total"></td>
                  					</tr>
                  				</table> 
                  				<table>
                  					<tr>
                  						<td>Mode &nbsp;</td><td>
                      					 	<select name="mode">
                             					<option value="cash">Cash</option>
                      							<option value="cheque">Cheque</option>
                      							<option value="other">Other</option>
                      						</select>
                      					</td>
                      					<td>Due Date:<input type="text" name="duedate" id="test2" value="<?php echo date('d-m-Y');?>" class="round"></td>
                    					<td>&nbsp; </td><td>&nbsp; </td> 
                  						<td>Description</td>
                  						<td><textarea name="description"></textarea></td>
                  						<td>&nbsp; </td>
                  						<td>&nbsp; </td>
                 						<td>&nbsp; </td>
                  					</tr>
                  				</table>
                  				<table class="form">
                    				<tr>
                    		 			<td><input  class="button round blue image-right ic-add text-upper" type="submit" name="Submit" value="Add" ></td>
                    		 			<td><input class="button round red   text-upper"  type="reset" name="Reset" value="Reset"> </td>
                     					<td>&nbsp; </td> <td>&nbsp; </td>
                    				</tr>
                				</table>
                			</div>
                		</form>
					</div> <!-- end content-module-main -->
				</div> <!-- end content-module -->
			</div>
		</div> <!-- end full-width -->
	</div> <!-- end content -->
	<!-- FOOTER -->
	<div id="footer">
		<p> &copy;Copyright 2017>
	</div> <!-- end footer -->
</body>
</html>