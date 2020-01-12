<?php 
session_start();
if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
{
  include("adminHeader.php");
?>
<hr>
<h1 align="center">Update Account Information</h1>
<hr>
<h2 >
<a href="updateInfo.php" style="background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;">Update Basic Account Information </a>
</h2>

<h2>
<a href="updatepassword.php" style="background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;">Update Password</a>
</h2>

<?php
}
?>