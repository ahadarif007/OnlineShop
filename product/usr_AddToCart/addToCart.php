<?php
 // req variable ----> productId 
 session_start();
if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes" )
{
    include("userHeader.php");
?>

<form action="addToCartProcess.php" method="post" >
    <br><br>
    Your Selected Product Number is <br>
    <input type="text" name="productId" id="productId" value="<?php echo $_REQUEST["productId"] ?>">
    <br><br>
    Select Quantity you want to purchase:<br>
    <input type="text" name="quantity" id="productId">
     <br><br>
    <input type="submit" name="submit" value="Add to my shopping cart">
</form>

<?php
}
?>