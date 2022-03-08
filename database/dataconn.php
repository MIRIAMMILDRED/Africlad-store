<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="Africlado2";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$time=date_timestamp_get(date_create())+7200;
// else{
//     echo "Connected successfully";
// }
// mysqli_close($conn);
?>




