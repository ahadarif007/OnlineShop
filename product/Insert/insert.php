<?php
session_start();
if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
{
    include("adminHeader.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" ) 
{
   

    if (empty($_POST["productName"])) 
    {
       echo"<p style='color:red'>product Name is required </p><br/>";
       $v1=0;
    } 
    else 
    {
       $productName = $_POST["productName"];
       $v1=1;	
    }


    if (empty($_POST["ProductCategory"])) 
    {
       echo"<p style='color:red'>Product Category is required </p><br/>";
       $v2=0;
    } 
    else 
    {
       $ProductCategory = $_POST["ProductCategory"];
       $v2=1;	
    }

    if (empty($_POST["price"])) 
    {
       echo"<p style='color:red'>price is required </p><br/>";
       $v3=0;
    } 
    else 
    {
        if(is_numeric($_POST["price"]))
        {
            $price = $_POST["price"];
            $v3=1;
        }
        else 
        {
            echo"<p style='color:red'>price must be in numeric value. </p><br/>";
        }
       	
    }

    if (empty($_POST["productDescription"])) 
    {
       echo"<p style='color:red'>productDescription is required </p><br/>";
       $v4=0;
    } 
    else 
    {
       $productDescription = $_POST["productDescription"];
       $v4=1;	
    }

    if (empty($_POST["availableQuantity"])) 
    {
       echo"<p style='color:red'>available Quantity is required </p><br/>";
       $v5=0;
    } 
    else 
    {
        if(is_numeric($_POST["availableQuantity"]))
        {
            $availableQuantity = $_POST["availableQuantity"];
            $v5=1;
        }
        else 
        {
            echo"<p style='color:red'>available Quantity must be in numeric value. </p><br/>";
        }
       	
    }

    $source=$_FILES['picture']['tmp_name']; // upload pic temporary in php server
    $target="../Insert/productImages/".$_FILES['picture']['name']; // target will hold image directory 
    if(move_uploaded_file($source,$target)){
        $v6=1;
        $picture=$target;
    }
    else {
        $v6=0;
    }

    $productId=uniqid("pid");

    //echo $v1.$v2.$v3.$v4.$v5.$v6;
//product:
//     0           1           2               3             4                 5               6
//productId , productName ,ProductCategory, price , productDescription ,availableQuantity, picture   

    if($v1==1 && $v2==1 && $v3==1 && $v4==1 && $v5==1 && $v6==1){


        include("../lib.php");
    //INSERT INTO `userdb` (`uname`, `pass`, `email`) VALUES ('".."', '".."', '".."');

	$sql="INSERT INTO product (productId , productName ,ProductCategory, price , productDescription ,availableQuantity, picture) 
    VALUES ('".$productId."', '".$productName."', '".$ProductCategory."', '".$price."', '".$productDescription."', '".$availableQuantity."', '".$picture."')";
	//print_r($sql);
	$result=insert($sql);
    if($result=true)
    {
        echo "<h1>Successfully inserted</h1>";
    }
	

        
        
        
        
        else {
            echo"<p style='color:red'>Form Not Validated</p>";
        }
    }

}



}
//print_r($_REQUEST);
/*

*/

?>