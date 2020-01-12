<?php
$dataSource="mysql";


function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","onlineshop");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$ar["firstname"]=$row["firstname"];

		$ar["email"]=$row["email"];
		$data[]=$ar;
	}
}


?>