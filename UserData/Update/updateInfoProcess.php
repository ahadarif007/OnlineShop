<?php


session_start();
if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes" )
{
include("userHeader.php");
include("../lib.php");
if(isset($_REQUEST["firstname"])&& isset($_REQUEST["lastname"]) && isset($_REQUEST["gender"]) && isset($_REQUEST["phone"]) && isset($_REQUEST["shippingAddress"])){

//UPDATE `userdb` SET `uname`=[$_REQUEST["uname"]],`pass`=[$_REQUEST["uname"]],`email`=[$_REQUEST["uname"]] WHERE uname='$_REQUEST["uname"]'

    $sql="UPDATE userdata 
    
    SET firstname='".$_REQUEST["firstname"]."',lastname='".$_REQUEST["lastname"]."',gender='".$_REQUEST["gender"]."',phone='".$_REQUEST["phone"]."',shippingAddress='".$_REQUEST["shippingAddress"]."' 
    
    WHERE email='".$_SESSION["id"]."'";
    


	//print_r($sql);
	$result=update($sql);
    if($result=true)
    {
        echo " <h1> Successfully Updated </h1> ";
    }
    else 
    echo "<h1> Update Failed</h1>";
	
}


}
?>