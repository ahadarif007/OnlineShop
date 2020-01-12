<?php

session_start();
unset($_SESSION["isValid"]);
unset($_SESSION["uname"]);
unset($_SESSION["isAdmin"]);

session_destroy();
header("Location:index.php");
?>