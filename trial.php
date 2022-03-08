<?php
require "./database/dataconn.php";    


$email = "miriammildredo@gmail.com";


$res = mysqli_query($conn, "SELECT * FROM members WHERE email='$email'");
$result=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM members WHERE email='$email'"));
print_r($result);  