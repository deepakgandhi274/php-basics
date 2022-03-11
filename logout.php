<?php 
session_start();
// session_destroy();
unset($_SESSION['user_key']);
header("location:index.php");

?>