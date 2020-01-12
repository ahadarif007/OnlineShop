<?php 
session_start();
if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes" )
{
    include("userHeader.php");
/*
    [productId] => pid5dfef3c1a50a5
    [quantity] => 3
    [submit] => Add to my shopping cart
*/


if(isset($_REQUEST["productId"]) && isset($_REQUEST["quantity"]))

{
    include("../productTable.php");

    //echo availableQuantity($_REQUEST["productId"]) ;
    //echo isValidPid($_REQUEST["productId"]);
    $availableQuantity=availableQuantity($_REQUEST["productId"]) ;
    if ( ($availableQuantity>$_REQUEST["quantity"] ) && isValidPid($_REQUEST["productId"])==1)
    {
        $cookie_name=$_REQUEST["productId"];
        $cookie_value=$_REQUEST["quantity"];
        $cookie_time=time() + (86400 * 30);
        setcookie($cookie_name, $cookie_value,$cookie_time , "/"); // 86400 = 1 day

        //print_r($_COOKIE);
        echo " <h1> Successfully added to the cart</h1>";
    }
    else 
    {
        echo " <h1>Not Enough Stock Available </h1>";
    }

}

else 
{
    echo "Please specify quantity";
}

}
?>