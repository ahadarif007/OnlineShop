<?php
session_start();
if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes" )
{
//print_r($_REQUEST);
//print_r($_REQUEST["password"]);
include("../lib.php");
if(isset($_REQUEST["password"])){

    $data=array();
	$sql="select * from userdata where email ='".$_SESSION["id"]."' AND password ='".md5($_REQUEST["password"])."' ";
	//print_r($sql);
	loadFromMySQL($sql);
    //$_session("id");
    if(sizeof($data)>0)
    {
        $sql="DELETE FROM userdata WHERE email='".$_SESSION["id"]."'";
        print_r($sql);
        $result=delete($sql);
        if($result=true)
        {
            echo "successfully deleted";
    
        }
        else 
            echo "not successful";
    }	
}
}
?>
