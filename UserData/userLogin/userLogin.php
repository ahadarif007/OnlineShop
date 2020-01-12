<?php
session_start();

$data=array();
include("../lib.php");
if(isset($_REQUEST["email"]) && isset($_REQUEST["pass"])){
	$sql="select * from userdata where email ='".$_REQUEST["email"]."' AND password ='".md5($_REQUEST["pass"])."' ";
	//print_r($sql);
	loadFromMySQL($sql);
	foreach($data as $v){

		$_SESSION["firstname"]=$v["firstname"];
		$_SESSION["lastname"]=$v["lastname"];
		$_SESSION["dateOfBirth"]=$v["dateOfBirth"];
		$_SESSION["gender"]=$v["gender"];
		$_SESSION["phone"]=$v["phone"];
		$_SESSION["email"]=$v["email"];
		$_SESSION["shippingAddress"]=$v["shippingAddress"];
		$_SESSION["password"]=$v["password"];
		$_SESSION["Picture"]=$v["Picture"];

		$_SESSION["isValid"]="yes";
		$_SESSION["id"]=$v["email"];
		$_SESSION["isAdmin"]="no";

		//print_r($_SESSION);
		header('Location:../userHome.php');

	}
	if(sizeof($data)==0)
		echo "User ID or password incorrect";
		echo"<br>";
		echo "<a href='userLogin.html'>Try Again</a>";
		//header('Location:userLogin.html');
}

?>