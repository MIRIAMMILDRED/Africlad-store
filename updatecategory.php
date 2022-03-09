<?php
require "./database/dataconn.php";
$product=$_POST['product'];
$category=$_POST['category'];
$sql=mysqli_query($conn,"UPDATE products SET special_categ='$category' WHERE id='$product'");
header("Location:category.php");
?>