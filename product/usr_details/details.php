
    

<?php
//print_r($_REQUEST);
//product:
//    0           1           2               3             4                 5               6
//productId , productName ,ProductCategory, price , productDescription ,availableQuantity, picture   
session_start();
if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes" )
{
include("userHeader.php");
$data=array();
include("../lib.php");
if(isset($_REQUEST["productId"])){
	$sql="select * from product where productId ='".$_REQUEST["productId"]."'";
	//print_r($sql);
	loadFromMySQL($sql);
	foreach($data as $v){

?>
     <div id="border">
     <h1> Product Description</h1>    
     <br>
Product ID:
<?php echo $v["productId"]; ?>
<br>

Product Name:
<?php echo $v["productName"]; ?>

<br>
Product Category:
<?php echo $v["ProductCategory"]; ?>
<br>

Product Price:
<?php echo $v["price"]." tk"; ?>

<br>
Product description: 
<?php echo $v["productDescription"]; ?>

<br>
Quantity Available:
<?php echo $v["availableQuantity"]." PCS"; ?>
<br>
Product Picture: 
    <img src="<?php echo $v['picture']; ?>" alt="item picture" height="200px" width="200px">
<br/>
    <?php
    //$s="../usr_AddToCart/addToCart.php";
   $s="../usr_AddToCart/addToCart.php?productId=".$v["productId"]; 

    ?>
    <a href=<?php echo"$s";?> id="addtocart" >Add to Shopping cart</a>
    


   

     </div>

<?php 
    }
}
}
?>