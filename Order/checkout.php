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
        $orderNo=uniqid("ordNo-");


        foreach ($_COOKIE as $key => $value) {
            
            if(isValidPid($key))
            {
            $orderID=uniqid("PK-");
            $userid=$_SESSION["id"];
            $pid=$key;
            $qty=$value;
            $name=name($pid);
            $price=price($pid);
            $qtyXprice= (int)($qty) * (int)($price);
            $isDelivered="no";

            $sql="INSERT INTO `order`(`orderNo`, `orderID`, `userid`, `pid`, `qty`, `name`, `price`, `qtyXprice`, `isDelivered`) 
            VALUES ( '".$orderNo."','". $orderID."' , '".$userid."', '".$pid."' , '".$qty."' , '".$name."', '".$price."', '".$qtyXprice."', '".$isDelivered."' )";

            $result=insert($sql);
            if($result=true)
        {
        echo "<h1>successfully ordered ".$name."</h1><br>";
        
        $leftover=availableQuantity($pid)-$qty;
        $sql=" update product set availableQuantity='".$leftover."' where productID='".$pid."'";
        update($sql);

        }


         }
        }

        }

        else {
            echo " No Product Selected To Check Out.";
        }



    }
?>