<?php

session_start();
if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
{
    include("../adminHeader.php");
?>
<hr>
<h1 align="center">Admin Home Page </h1>
<hr>



<h2> 

Hi, <?php echo $_SESSION["firstname"]; ?> 
<br>

 Welcome to The Online Shop as an Admin.</h2>



<?php
}
?>