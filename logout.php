<?php 
require "./database/dataconn.php";
session_start();
unset($_SESSION['email']);
unset($_SESSION['Full_name']);
header("Location:index.php");
?>