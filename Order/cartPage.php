<?php
session_start();

if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes")
{
    
    include("lib.php");
    include("userHeader.php");
        /*
    1	    2 *        3     4    5     6     7        8           9      
orderNo, orderID , userid, pid, qty, name, price, qtyXprice, isDelivered 
        */

        if(count($_COOKIE) > 0)
        {
            
            echo " <hr>";
            echo "<h1 align=center>CART</h1>";
            echo"<hr>";
        //$orderNo=uniqid("ordNo-");
        $totalprice=0;

        foreach ($_COOKIE as $key => $value) {
            
            if(isValidPid($key))
            {
          //  $orderID=uniqid("PK-");
            //$userid=$_SESSION["id"];
            $pid=$key;
            $qty=$value;
            $name=name($pid);
            $price=price($pid);
            $qtyXprice= (int)($qty) * (int)($price);
            $totalprice+=$qtyXprice;

            echo "Product Name:".$name."  | ";
            echo "Product Quantity:".$qty." | ";
            echo " Price: ".$price." | ";
            echo "Quantity x price: ".$qtyXprice." | ";
            echo "<hr>";
            




            //$isDelivered="no";

            //$sql="INSERT INTO `order`(`orderNo`, `orderID`, `userid`, `pid`, `qty`, `name`, `price`, `qtyXprice`, `isDelivered`) 
            //VALUES ( '".$orderNo."','". $orderID."' , '".$userid."', '".$pid."' , '".$qty."' , '".$name."', '".$price."', '".$qtyXprice."', '".$isDelivered."' )";

            //$result=insert($sql);
            //if($result=true)
        


         }
        }

        echo " <h2>total price :".$totalprice."</h2>";

        echo "<a href='checkout.php' id='link'>checkout</a> <br> <br>";
        echo "<a href='clearCart.php' id='link'> clear cart and signout</a>";


        }

        else {
            echo " No Product Selected To Check Out.";
        }



    }
?>
