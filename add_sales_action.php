<?php
include ('config.php');
$stock_name=$_POST['item'];
$quty=$_POST['quty'];
$date=$_POST['date'];
$sell=$_POST['sell'];
$total=$_POST['total'];
$payable=$_POST['subtotal'];
$description=$_POST['description'];
$due=mysql_real_escape_string($_POST['duedate']);
$payment=mysql_real_escape_string($_POST['payment']);
$discount=mysql_real_escape_string($_POST['discount']);
    
    if($discount==""){
    	$discount=00;
    }
$dis_amount=$_POST['dis_amount'];
	if($dis_amount==""){
		$dis_amount=00;
	}
$subtotal=$_POST['payable'];
$balance=$_POST['balance'];
$mode=$_POST['mode'];
$tax=$_POST['tax'];
    if($tax==""){
       $tax=00;
    }
$tax_dis=$_POST['tax_dis'];
    $temp_balance = "SELECT balance FROM customer_details WHERE customer_name='$customer'";
    $temp_balance = (int) $temp_balance +  (int) $balance;
    $db->execute("UPDATE customer_details SET balance=$temp_balance WHERE customer_name='$customer'");
    $selected_date=$_POST['due'];
    $selected_date=strtotime( $selected_date );
     $mysqldate = date( 'Y-m-d H:i:s', $selected_date );
         $due=$mysqldate;
                                          $max = $db->maxOfAll("id", "stock_entries");
					  $max=$max+1;
					  $autoid="SD".$max."";
                                            for($i=0;$i<count($stock_name);$i++)
                                            {
                        $name1=$stock_name[$i];
                        $quantity=$_POST['quty'][$i];
						$rate=$_POST['sell'][$i];
						$total=$_POST['total'][$i];
			
			
			$selected_date=$_POST['date'];
		  	$selected_date=strtotime( $selected_date );
			$mysqldate = date( 'Y-m-d H:i:s', $selected_date );
			$username = $_SESSION['username'];
		
			$count = $db->queryUniqueValue("SELECT quantity FROM stock_avail WHERE name='$name1'");
	
			if($count >= 1)
			{  
			$db->query("insert into stock_sales (tax,tax_dis,discount,dis_amount,grand_total,transactionid,stock_name,selling_price,quantity,amount,date,username,customer_id,subtotal,payment,balance,due,mode,description,count1,billnumber) 
                            values($tax,'$tax_dis',$discount,$dis_amount,$payable,'$autoid','$name1',$rate,$quantity,$total,'$mysqldate','$username','$customer',$subtotal,$payment,$balance,'$due','$mode','$description',$i+1,'$bill_no')");
			
			$amount = $db->queryUniqueValue("SELECT quantity FROM stock_avail WHERE name='$name1'");
				$amount1 = $amount - $quantity;
			
			$db->query("insert into stock_entries (stock_id,stock_name,quantity,opening_stock,closing_stock,date,username,type,salesid,total,selling_price,count1,billnumber) values('$autoid','$name1',$quantity,$amount,$amount1,'$mysqldate','$username','sales','$autoid',$total,$rate,$i+1,'$bill_no')");
			//echo "<br><font color=green size=+1 >New Sales Added ! Transaction ID [ $autoid ]</font>" ;
			
			
			$amount = $db->queryUniqueValue("SELECT quantity FROM stock_avail WHERE name='$name1'");
				$amount1 = $amount - $quantity;
				$db->execute("UPDATE stock_avail SET quantity=$amount1 WHERE name='$name1'");
			
			}
			else 
			{
				echo "<br><font color=green size=+1 >There is no enough stock deliver for $name1! Please add stock !</font>" ;
			}
			
                        
			}		
                          $msg="Sales Added successfully Ref: ". $_POST['stockid']."" ;
                          
				
							 header("Location:add_sales.php?msg=$msg");
							 ?>
			