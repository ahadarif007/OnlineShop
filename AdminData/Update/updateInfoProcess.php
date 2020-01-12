<?php


session_start();
if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
{
  include("adminHeader.php");


include("../lib.php");
if(isset($_REQUEST["firstname"])&& isset($_REQUEST["lastname"]) && isset($_REQUEST["gender"]) && isset($_REQUEST["phone"]) && isset($_REQUEST["permanentAddress"])){

//UPDATE `userdb` SET `uname`=[$_REQUEST["uname"]],`pass`=[$_REQUEST["uname"]],`email`=[$_REQUEST["uname"]] WHERE uname='$_REQUEST["uname"]'

    $sql="UPDATE admindata 
    
    SET firstname='".$_REQUEST["firstname"]."',lastname='".$_REQUEST["lastname"]."',gender='".$_REQUEST["gender"]."',phone='".$_REQUEST["phone"]."',permanentAddress='".$_REQUEST["permanentAddress"]."' 
    
    WHERE email='".$_SESSION["id"]."'";
    


	//print_r($sql);
	$result=update($sql);
    if($result=true)
    {
        echo "<h1> Successfully Updated</h1>";
    }
    else 
    echo "<h1> Update Failed </h1>";
	
}

}


?>