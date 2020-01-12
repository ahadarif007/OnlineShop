<?php
/*
firstname
lastname
dateOfBirth
gender
phone
email
permanentAddress
password
Picture
*/
session_start();

$data=array();
include("../lib.php");
if(isset($_REQUEST["email"]) && isset($_REQUEST["pass"])){ 
	$sql="select * from admindata where email ='".$_REQUEST["email"]."' AND password ='".md5($_REQUEST["pass"])."' ";
	print_r($sql);
	loadFromMySQL($sql);
	foreach($data as $v){

		print_r($v);
		$_SESSION["firstname"]=$v["firstname"];
		$_SESSION["lastname"]=$v["lastname"];
		$_SESSION["dateOfBirth"]=$v["dateOfBirth"];
		$_SESSION["gender"]=$v["gender"];
		$_SESSION["phone"]=$v["phone"];
		$_SESSION["email"]=$v["email"];
		$_SESSION["permanentAddress"]=$v["permanentAddress"];
		$_SESSION["password"]=$v["password"];
		$_SESSION["Picture"]=$v["Picture"];

		$_SESSION["isValid"]="yes";
		$_SESSION["id"]=$v["email"];
		$_SESSION["isAdmin"]="yes";

		//print_r($_SESSION);
		header('Location:../adminHome.php');

	}
	if(sizeof($data)==0)
		echo "admin ID or password incorrect";
		//header('Location:userLogin.html');
}

?>