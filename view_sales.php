<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Stock</title>    
	<!-- Stylesheets -->
	<!--<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>-->
	<link rel="stylesheet" href="css/style.css">	
	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>	
	<!-- jQuery & JS files -->
	<?php include_once("tpl/common_js.php"); ?>
	<script src="js/script.js"></script> 
  	<script  src="dist/js/jquery.ui.draggable.js"></script>
	<script src="dist/js/jquery.alerts.js"></script>
	<link rel="stylesheet"  href="dist/js/jquery.alerts.css" >
    <script LANGUAGE="JavaScript" src="js/view_sales.js"></script>
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
				<li><a href="view_sales.php" class=active-tab sales-tab">Sales</a></li>
				<li><a href="view_customers.php" class=" customers-tab">Customers</a></li>
				<li><a href="view_purchase.php" class=" purchase-tab">Purchase</a></li>
				<li><a href="view_supplier.php" class=" supplier-tab">Supplier</a></li>
				<li><a href="view_product.php" class=" stock-tab">Stocks / Products</a></li>
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
				
				<h3>Sales</h3>
				<ul>
					<li><a href="add_sales.php">Add Sales</a></li>
					<li><a href="view_sales.php">View Sales</a></li>
					
				</ul>				                                                               
			</div> <!-- end side-menu -->
			
			<div class="side-content fr">
			
				<div class="content-module">
				
					<div class="content-module-heading cf">
					
						<h3 class="fl">Sales</h3>
						<span class="fr expand-collapse-text">Click to collapse</span>
						<span class="fr expand-collapse-text initial-expand">Click to expand</span>					
					</div> <!-- end content-module-heading -->
					
						<div class="content-module-main cf">
							<table>
								<form action="" method="post" name="search" >
    								<input name="searchtxt" type="text" class="round my_text_box" placeholder="Search" > 
									&nbsp;&nbsp;
									<input name="Search" type="submit" class="my_button round blue   text-upper" value="Search">
								</form>
                                            
								<form name="deletefiles" action="delete.php" method="post">
									<input type="hidden" name="table" value="stock_details">
									<input type="hidden" name="return" value="view_product.php">
									<input type="button" name="selectall" value="SelectAll" class="my_button round blue   text-upper" onClick="checkAll()"  style="margin-left:5px;"/>
									<input type="button" name="unselectall" value="DeSelectAll" class="my_button round blue   text-upper" onClick="uncheckAll()" style="margin-left:5px;" />
									<input name="dsubmit" type="button" value="Delete Selected" class="my_button round blue   text-upper" style="margin-left:5px;" onclick="return confirmDeleteSubmit()"/>
								</form>
								
									<?php
										$con = mysqli_connect("localhost","root","dorcas1994","pos");

										if (mysqli_connect_errno($con))
    									{
        									echo "Failed to connect to mysql" . mysqli_connect_error();
    									}  
    									else    								   
        									echo '<tr>';            								
            								echo '<th>Transaction Id</th>';
            								echo '<th>Customer ID</th>';
            								echo ' <th>Stock Name</th>';
            								echo ' <th>Price</th>';
            								echo ' <th>Quantity</th>';
            								echo '<th>Total Amount</th>';
            								echo '<th>Paid</th>';
											echo '<th>Balance</th>';
											echo '<th>Edit /Delete</th>';
                                			echo '<th>Select</th>';
        									echo ' </tr>';

    									$result = mysqli_query($con,"SELECT * FROM stock_sales");
    									while($row=mysqli_fetch_array($result))
    									{    									
    								?>
    										<tr>
    											<td><?php echo $row['transactionid']; ?></td>
    											<td><?php echo $row['customer_id']; ?></td>
    											<td><?php echo $row['stock_name']; ?></td>
    											<td><?php echo $row['selling_price']; ?></td>
    											<td><?php echo $row['company_price']; ?></td>
    											<td><?php echo $row['amount']; ?></td>
    											<td><?php echo $row['payment']; ?></td>
    											<td><?php echo $row['balance']; ?></td>

    											<td>
       												<a href="update_sales.php?sid=<?php echo $row['id'];?>&table=stock_sales&return=view_sales.php"	class="table-actions-button ic-table-edit"></a>
	        										<a  href="javascript:confirmSubmit(<?php echo $row['id']?>,'stock_sales','view_sales.php')" class="table-actions-button ic-table-delete"></a>		
												</td>
												<td><input type="checkbox" value="<?php echo $row['id']; ?>" name="checklist[]" id="check_box" />
												</td>
       										</tr>
       								<?php
       								}?>
							</table>
						</div> 
				</div>
			</div> 
		</div>
	</div>

	<div id="footer">
		<p> &copy;Copyright 2017 </p>	
	</div> <!-- end footer -->
</body>
</html>