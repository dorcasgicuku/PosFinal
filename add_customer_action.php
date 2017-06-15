<?php
  include('config.php'); 
  include("tpl/db.class.php");
  $db = new DB("pos", "localhost", "root", "dorcas1994");
  
$Name=$_POST['name'];
$Address=$_POST['address'];
$Contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];

if(isset($_POST['Submit']))
            {
              $query =$db->query("insert into customer_details(id, customer_name, customer_address,customer_contact1, customer_contact2)  values(NUll, '$Name','$Address','$Contact1','$contact2')")
                
            }

  ?>