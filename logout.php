<?php 
include("admin/config.php");
session_start();
session_destroy();
unset($_SESSION['regid']);
header("location:login.php"); 

?>

 
   