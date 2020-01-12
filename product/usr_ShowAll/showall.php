<?php    
?>
<!--
    product:
    0           1           2               3             4                 5               6
productId , productName ,ProductCategory, price , productDescription ,availableQuantity, picture   

-->
<?php

session_start();
if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes" )
{
    include("userHeader.php");
?>
<html>
    <head>
        <title> Product List </title>
    </head>
<body>
    <hr>
    <h1 align="center" >Product List</h1>
    <hr>
    <table  align="center" width=90% id="tab">
            <tr>
                <th>
                        product Id
                </th>

                <th>
                        product Name
                </th>

                <th>
                        Product Category
                </th>

                <th>
                        price
                </th>

                <th>
                        product Description
                </th>

                <th>
                        available Quantity
                </th>
                <th>
                        picture
                </th>
                <th>
                    details
                </th>

            </tr>

            
<?php

//product:
//    0           1           2               3             4                 5               6
//productId , productName ,ProductCategory, price , productDescription ,availableQuantity, picture   

$data=array();
include("../lib.php");

$sql="select * from product ";
//print_r($sql);
loadFromMySQL($sql);

     foreach($data as $v){ 
?>
     <tr>

     <td><?php echo $v["productId"]; ?></td>

     <td><?php echo $v["productName"]; ?></td>
     
     <td><?php echo $v["ProductCategory"]; ?></td>
     
     <td><?php echo $v["price"]; ?></td>
     
     <td><?php echo $v["productDescription"]; ?></td>

     <td><?php echo $v["availableQuantity"]; ?></td>
     
     <td>
         <img src="<?php echo $v['picture']; ?>" alt="picture missing" height="50px" width="50px">
     </td>

     <td>
         <?php
        
         $s="../usr_details/details.php?productId=".$v["productId"];
         ?>
         <a href=<?php echo"$s";?> >Details</a>
         
     </td>

     </tr>
     <?php
     }
    ?>
    </table>

</body>
</html>





<?php

   
	
	if(sizeof($data)==0)
		echo "No products found";

    
}
?>