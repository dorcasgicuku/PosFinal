<?php
  include('config.php'); 
   
$Name=$_POST['name'];
$Address=$_POST['address'];
$Contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];

if(isset($_POST['Submit'])) {
    $sql="INSERT INTO customer_details(id, customer_name, customer_address,customer_contact1, customer_contact2) VALUES(NUll, '$Name','$Address','$Contact1','$contact2')";
              
        if (mysql_query($sql) === TRUE) {
    		echo "New record created successfully";
		} 
		else {
    		echo "Error: " . $sql . "<br>" ;
		}

}
  ?>