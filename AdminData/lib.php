<?php
function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","onlineshop");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
/*
UserData:
    0           1           2         3       4      5          6              7        8
firstname , lastname , dateOfBirth, gender, phone, email, permanentAddress, password , Picture

*/
		$ar["firstname"]=$row["firstname"];
		$ar["lastname"]=$row["lastname"];
		$ar["dateOfBirth"]=$row["dateOfBirth"];
		$ar["gender"]=$row["gender"];
		$ar["phone"]=$row["phone"];
		$ar["email"]=$row["email"];
		$ar["permanentAddress"]=$row["permanentAddress"];
		$ar["password"]=$row["password"];
		$ar["Picture"]=$row["Picture"];
		
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