<?php
session_start();
if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes" )
{
    include("../userHeader.php");
?>


<hr>
<h1 align="center">User Home Page </h1>
<hr>
<h2> 

Hi, <?php echo $_SESSION["firstname"]; ?> 
<br>

 Welcome to Online Shop</h2>




<?php
//print_r($_SESSION);
//session_start();
/*
    [firstname] => shanto1
    [lastname] => hasan
    [dateOfBirth] => 3 march 2018
    [gender] => male
    [phone] => 01720513318
    [email] => ahadarif@gmail.com
    [shippingAddress] => lkhkuyhfikuyhgf 
    [password] => 25f9e794323b453885f5181f1b624d0b
    [Picture] => ../signup/userImages/ProfileImage.jpg
*/

        //print_r($_SESSION);
?>

<?php
}
?>