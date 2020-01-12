<?php

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