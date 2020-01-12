<?php
	session_start();
	if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
	{
		include("adminHeader.php");
?>


<hr>
<h1 align="center">Order History</h1>
<hr>
<table border="1px" id="tab">
<?php    
    $data=array();
    include("../lib.php");
    
	$sql="SELECT * FROM `order`";
	//print_r($sql);
	loadFromMySQL($sql);
	foreach($data as $ar){
		//orderNo, orderID , userid, pid, qty, name, price, qtyXprice, isDelivered 
		?>
		
				<tr>
					<td>
							Order No: <?php echo $ar["orderNo"]?>
					</td>
					<td>
							Order ID: <?php echo $ar["orderID"]?>
					</td>
					<td>
					Order No: <?php echo $ar["userid"]?>
					</td>
					<td>
					 		Product ID: <?php echo $ar["pid"]?>
					</td>
					<td>
							Ordered Quantity: <?php echo $ar["qty"]?>
					</td>
					<td>
							Product Name: <?php echo $ar["name"]?>
					</td>
					<td>
							Price: <?php echo $ar["price"]?>
					</td>
					<td>
					Quantity x Price: <?php echo $ar["qtyXprice"]?>
					</td>
					
					<td>
					is Delivered: <?php echo $ar["isDelivered"]?>
					</td>
				</tr>

		
		<?php
		
	}
	if(sizeof($data)==0)
		echo "Not found";

}
    
?>
</table>