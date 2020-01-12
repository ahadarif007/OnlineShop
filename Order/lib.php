<?php

/*
   1	    2         3     4    5     6     7        8           9      
orderNo, orderID , userid, pid, qty, name, price, qtyXprice, isDelivered 
*/
function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","onlineshop");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$ar["orderNo"]=$row["orderNo"];
		$ar["orderID"]=$row["orderID"];
		$ar["userid"]=$row["userid"];
		$ar["pid"]=$row["pid"];
		$ar["qty"]=$row["qty"];
		$ar["name"]=$row["name"];
		$ar["price"]=$row["price"];
		$ar["qtyXprice"]=$row["qtyXprice"];
		$ar["isDelivered"]=$row["isDelivered"];
		$data[]=$ar;
	}
}

function insert($sql){
	$conn = mysqli_connect("localhost", "root", "","onlineshop");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
	
}

function delete($sql){
	$conn = mysqli_connect("localhost", "root", "","onlineshop");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
	
}

function update($sql){
	$conn = mysqli_connect("localhost", "root", "","onlineshop");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
	
}

function availableQuantity($pid)
{  
    $sql="select availableQuantity from product where productId='".$pid."'";
	$conn = mysqli_connect("localhost", "root", "","onlineshop");
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)) {
		$availableQuantity=$row["availableQuantity"];
	}
     return $availableQuantity;

}

function price($pid)
{
    $sql="select price from product where productId='".$pid."'";
	$conn = mysqli_connect("localhost", "root", "","onlineshop");
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)) {
		$price=$row["price"];
	}
     return $price;
}

function name($pid)
{
    $sql="select productName from product where productId='".$pid."'";
	$conn = mysqli_connect("localhost", "root", "","onlineshop");
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)) {
		$productName=$row["productName"];
	}
     return $productName;
}

function isValidPid($pid)
{  
    $sql="select * from product where productId='".$pid."'";
	$conn = mysqli_connect("localhost", "root", "","onlineshop");
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)) {
		return true;
	}
     return false;

}





?>