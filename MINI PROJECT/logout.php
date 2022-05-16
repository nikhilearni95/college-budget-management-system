<?php
// Starting session
session_start();
 
// Destroying session
session_destroy();
echo "logout successfully";
header("Location:index.php");
?>