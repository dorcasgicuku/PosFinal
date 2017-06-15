<table>
									<?php 
										$SQL = "SELECT * FROM  stock_details";
										if(isset($_POST['Search']) AND trim($_POST['searchtxt'])!=""){

											$SQL = "SELECT * FROM  stock_details WHERE stock_name LIKE '%".$_POST['searchtxt']."%' OR supplier_address LIKE '%".$_POST['searchtxt']."%' OR supplier_id LIKE '%".$_POST['searchtxt']."%' OR date LIKE '%".$_POST['searchtxt']."%'";
										}

										$tbl_name="stock_details";	
										$adjacents = 3;
										$query = "SELECT COUNT(*) as num FROM $tbl_name";
										$total_pages = mysql_fetch_array(mysql_query($query));
										$total_pages = $total_pages[num];
										$targetpage = "view_product.php"; 
										$limit = 10; //how many items to show per page
										
										if(isset($_GET['limit']) && is_numeric($_GET['limit'])){
											$limit=$_GET['limit'];
        									$_GET['limit']=10;
										}
										
										$page = $_GET['page'];
										
										if($page) 
											$start = ($page - 1) * $limit;//first item to display on this page
										else
											$start = 0;	//if no page var is given, set start to 0
										
										/* Get data. */

										$sql = "SELECT * FROM $tbl_name LIMIT $start, $limit ";
										if(isset($_POST['Search']) AND trim($_POST['searchtxt'])!=""){
											$sql= "SELECT * FROM  $tbl_name WHERE stock_name LIKE '%".$_POST['searchtxt']."%' OR stock_id LIKE '%".$_POST['searchtxt']."%' OR supplier_id LIKE '%".$_POST['searchtxt']."%' OR date LIKE '%".$_POST['searchtxt']."%'  LIMIT $start, $limit";
										}
										$result = mysql_query($sql);
									?>	
									
										
									<?php 
						   $i=1; $no=$page-1; $no=$no*$limit;	
							while($row = mysql_fetch_array($result)){
 									?>
 									<tr>
   							<td> <?php echo $no+$i; ?></td>
   							<td><?php echo $row['stock_name']; ?></td>
      						<td> <?php echo $row['stock_id'];?></td>
      						<td> <?php echo $row['date'];?></td>
   							<td> <?php echo $row['supplier_id']; ?></td>
   							<td> <?php echo $row['selling_price']; ?></td>
   							<td> <?php $quantity = $db->queryUniqueValue("SELECT quantity FROM stock_avail WHERE name='".$row['stock_name']."'"); echo $quantity; ?></td>
    						<td>
    							<a href="update_stock.php?sid=<?php echo $row['id'];?>&table=stock_details&return=view_product.php"	class="table-actions-button ic-table-edit">
								</a>
	
								<a  href="javascript:confirmSubmit(<?php echo $row['id'];?>,'stock_details','view_product.php')" class="table-actions-button ic-table-delete"></a>	
    						</td>
							<td><input type="checkbox" value="<?php echo $row['id']; ?>" name="checklist[]" id="check_box" /></td>

									</tr>
									<?php 
							$i++; 
							} 
									?>
 									<tr>
       									<td align="center"><div style="margin-left:20px;"><?php echo $pagination; ?></div></td>
      								</tr>
								</table>