<?php
session_start();
if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
{
  include("adminHeader.php");
//session_start();
//print_r($_SESSION);

$v["firstname"]=$_SESSION["firstname"];
$v["lastname"]=$_SESSION["lastname"];
$v["dateOfBirth"]=$_SESSION["dateOfBirth"];
$v["gender"]=$_SESSION["gender"];
$v["phone"]=$_SESSION["phone"];
$v["email"]=$_SESSION["email"];
$v["permanentAddress"]=$_SESSION["permanentAddress"];
$v["password"]=$_SESSION["password"];
$v["Picture"]=$_SESSION["Picture"];


//separating day month and year from date 
$dob=explode(" ",$v["dateOfBirth"]);
$v["day"]=$dob[0];
$v["month"]=$dob[1];
$v["year"]=$dob[2];


//print_r($v);
?>
<br> <br> 
<form action="updateInfoProcess.php" method="post" >
  First name:<br>
  <input type="text" name="firstname" value=<?php echo $v["firstname"];?>><br><br>
  Last name:<br>
  <input type="text" name="lastname" value=<?php echo $v["lastname"];?>><br><br>
  

 Gender:<br>
         <input type="radio" name="gender" value="male" <?php if($v["gender"]=="male") echo "checked";?>> Male<br>
         <input type="radio" name="gender" value="female" <?php if($v["gender"]=="female") echo "checked";?>> Female<br>
         <input type="radio" name="gender" value="other" <?php if($v["gender"]=="other") echo "checked";?>> Other<br><br>

		 
  Phone:<br>
  <input type="text" name="phone" value=<?php echo $v["phone"];?>><br><br>
  
  Date Of Birth: <?php echo $v["dateOfBirth"];?>
  <br><br>
  Email:<?php echo $v["email"];?>> <br><br>
 
Permanent Address: <br>
 <textarea name="permanentAddress" cols="50" rows="10%" ><?php echo $v["permanentAddress"]?> </textarea>
 <br/> <br/>
<input type="submit" value="Update" name="submit"> 

</form>
 <!--
   Old Password:<br>
  <input type="password" name="pass"><br><br>
  
  new Password:<br>
  <input type="password" name="cpass"><br><br>
  Confirm new Password:<br>
  <input type="password" name="cpass"><br><br><br>
-->
 
 

<?php
}
?>