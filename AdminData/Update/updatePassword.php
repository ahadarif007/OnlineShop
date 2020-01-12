<?php 
session_start();
if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
{
  include("adminHeader.php");
?>
<br> <br>
<form action="updatePasswordProcess.php" method="post">
 Old Password:<br>
  <input type="password" name="pass"><br><br>
  
  new Password:<br>
  <input type="password" name="cpass1"><br><br>
  Confirm new Password:<br>
  <input type="password" name="cpass2"><br><br>
  <input type="submit" name="submit" value="Change Password">
  
</form>

<?php
}
?>
