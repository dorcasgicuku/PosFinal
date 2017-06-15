<?php
  include('config.php'); 
  
  
$Name=$_POST['name'];
$Address=$_POST['address'];
$Contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];

if(isset($_POST['Submit']))
            {
				$query="insert into customer_details values('$Name', '$Address', '$Contact1', '$contact2') ";
				var_dump($query);
				die;
				if($query){
					echo "Records inserted succesfully";
				}
				else{
					echo "not successfull";
				}
            }

  ?>