<?php
  include('config.php'); 
   
$id=$_POST['stockid'];
$stockName=$_POST['name'];
$quantity=$_POST['stockqty'];
$supplier=$_POST['supplier'];
$buyingPrice=$_POST['cost'];
$sellingPrice=$_POST['sell'];
$category=$_POST['category'];



if(isset($_POST['Submit'])) {
    $sql="INSERT INTO stock_details(id, stock_id, stock_name,stock_quatity, supplier_id,company_price,selling_price,category) VALUES(NUll, '$id','$stockName','$quantity','$supplier','$buyingPrice','$sellingPrice','$category')";
              
              
        if (mysql_query($sql) === TRUE) {
    		echo "New record created successfully";
		} 
		else {
    		echo "Error: " . $sql . "<br>" ;
		}

}
  ?>