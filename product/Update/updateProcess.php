<?php

/*
$_REQUEST["productId"]
$_REQUEST["productName"]
$_REQUEST["ProductCategory"]
$_REQUEST["price"]
$_REQUEST["productDescription"]
$_REQUEST["availableQuantity"]
$_REQUEST["picture"]
$_REQUEST["newpicture"]

*/

session_start();
if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
{


if(isset($_REQUEST["productId"]) && isset($_REQUEST["productName"]) && isset($_REQUEST["ProductCategory"])&& isset($_REQUEST["price"])&& isset($_REQUEST["productDescription"])&& isset($_REQUEST["availableQuantity"]))
{

    //no new picture 
    if(empty($_FILES["newpicture"]["name"])==1) // 1 output means no new pic chosen)
    {

        include("../lib.php");

        $sql= " UPDATE product 
        SET productName='".$_REQUEST["productName"]."',ProductCategory='".$_REQUEST["ProductCategory"]."',price='".$_REQUEST["price"]."',productDescription='".$_REQUEST["productDescription"]."',availableQuantity='".$_REQUEST["availableQuantity"]."',picture='".$_REQUEST["picture"]."' 
        WHERE productId='".$_REQUEST["productId"]."'";
	    print_r($sql);
	    $result=update($sql);
        if($result=true)
        {
            echo "<hr>";
            echo "<h1>successfully Updated </h1>";
            echo "<hr>";
        }
        else 
        {
        echo "<hr>";
        echo "<h1>Update Failed</h1>";
        echo "<hr>";   
        }



    }
    else // new pic chosen
    {
        //uploading picture
        $source=$_FILES['newpicture']['tmp_name']; // upload pic temporary in php server
        $target="../Insert/productImages/".$_FILES['newpicture']['name']; // target will hold image directory 
        if(move_uploaded_file($source,$target))
            {
                //echo $target;
                $picture=$target;
                //echo $picture;
            }

        //updating database 

        include("../lib.php");

        $sql= " UPDATE product 
        SET productName='".$_REQUEST["productName"]."',ProductCategory='".$_REQUEST["ProductCategory"]."',price='".$_REQUEST["price"]."',productDescription='".$_REQUEST["productDescription"]."',availableQuantity='".$_REQUEST["availableQuantity"]."',picture='".$picture."' 
        WHERE productId='".$_REQUEST["productId"]."'";
	    //print_r($sql);
	    $result=update($sql);
        if($result=true)
        {
            echo "<hr>";
            echo "<h1>successfully Updated </h1>";
            echo "<hr>";
        }
        else 
        {
        echo "<hr>";
        echo "<h1>Update Failed</h1>";
        echo "<hr>";
        }
    }

}










//print_r($_REQUEST);
//print_r($_FILES);


 

}

?>