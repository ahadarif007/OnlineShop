
<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <style>
    #border {
  border: 1px solid gray;
  padding: 8px;
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}

h1 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}

a {
  text-decoration: none;
  color: #008CBA;
}
    </style>
</head>

<body>
    

<?php
//print_r($_REQUEST);
//product:
//    0           1           2               3             4                 5               6
//productId , productName ,ProductCategory, price , productDescription ,availableQuantity, picture   
session_start();
if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
{

include("adminHeader.php");
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
    $s="../Update/updateLoad.php";
   $s="../Delete/delete.php?productId=".$v["productId"]; 
   $r="../Update/updateLoad.php?productId=".$v["productId"];
    ?>
    </div>
    <h2>
        <a href=<?php echo"$r";?> >Update | </a>
    <a href=<?php echo"$s";?> >Delete</a>
    </h2>
    
    


   

</body>
</html>

<?php 
    }
}
}
?>