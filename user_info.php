<?php
require "./database/dataconn.php";
session_start();
$email=$_SESSION['email'];
$sql="SELECT * FROM members WHERE Email='$email'";
$result=mysqli_query($conn,$sql);
// print_r($result) ;
?>