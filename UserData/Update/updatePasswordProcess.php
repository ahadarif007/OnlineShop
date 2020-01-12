<?php
session_start();
//print_r($_REQUEST);
//print_r($_SESSION);

if($_SESSION["isValid"]=="yes" && isset($_REQUEST["cpass1"]) && isset($_REQUEST["cpass2"]) && isset($_REQUEST["pass"]))
{
    include("userHeader.php");
    echo "<h1>";
    $data=array();
    include("../lib.php");
	$sql="select * from userdata where email ='".$_SESSION["id"]."' AND password ='".md5($_REQUEST["pass"])."' ";
	//print_r($sql);
	loadFromMySQL($sql);
    //$_session("id");
    if(sizeof($data)>0)
    {
        if($_REQUEST["cpass1"]==$_REQUEST["cpass2"])
        {

            $sql="UPDATE userdata SET password='".md5($_REQUEST["cpass1"])."' WHERE email='".$_SESSION["id"]."'";
        //print_r($sql);
	    $result=update($sql);
             if($result=true)
             {
              echo "Password successfully changed";
             }
            else 
            echo "Password Can't be changed";
	
        }
    else echo"both new password should be matched";


   }

   else echo"old password incorrect";
}
else echo"please fill up form properly";


echo "</h1>";

session_destroy();
header("Location:http://localhost/projectFinal/index.php");

?>