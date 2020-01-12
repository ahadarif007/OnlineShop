<?php
/*
product:
    0           1           2               3             4                 5               6
productId , productName ,ProductCategory, price , productDescription ,availableQuantity, picture 
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
		$ar["productId"]=$row["productId"];
		$ar["productName"]=$row["productName"];
		$ar["ProductCategory"]=$row["ProductCategory"];
		$ar["price"]=$row["price"];
		$ar["productDescription"]=$row["productDescription"];
		$ar["availableQuantity"]=$row["availableQuantity"];
		$ar["picture"]=$row["picture"];
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


?>