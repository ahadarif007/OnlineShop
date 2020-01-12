<?php
//print_r($_REQUEST);
//print_r($_REQUEST["productId"]);
session_start();
if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
{
    include("adminHeader.php");
include("../lib.php");
if(isset($_REQUEST["productId"])){
//DELETE FROM `userdb` WHERE uname=0;

	$sql="DELETE FROM product WHERE productId='".$_REQUEST["productId"]."'";
	//print_r($sql);
	$result=delete($sql);
    if($result=true)
    {
        echo "<h1>successfully deleted</h1>";
    }
    else 
        echo "<h1>Not successful</h1>";
	
}
}
?>
