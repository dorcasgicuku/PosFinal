<?php
  include('config.php'); 
   
$Name=$_POST['name'];
$Address=$_POST['address'];
$Contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];

if(isset($_POST['Submit'])) {
    $sql="INSERT INTO supplier_details ( supplier_name, supplier_address,supplier_contact1, supplier_contact2, balance) VALUES('$Name','$Address','$Contact1','$contact2', 0.0)";
              
        if (mysql_query($sql) === TRUE) {
    		echo "New record created successfully";
		} 
		else {
    		echo "Error: " . $sql . "<br>" ;
		}

}
  ?>