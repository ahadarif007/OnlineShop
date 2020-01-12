<?php
session_start();
if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes" )
{
 include("userHeader.php");
?>
<hr>
<h1 align="center"> Change Password</h1>
<hr>
<form action="updatePasswordProcess.php" method="post">
 Old Password:<br>
  <input type="password" name="pass"><br><br>
  
  New Password:<br>
  <input type="password" name="cpass1"><br><br>
  Confirm new Password:<br>
  <input type="password" name="cpass2"><br><br>
  <input type="submit" name="submit" value="Change Password">
  
</form>

<?php
}
?>
