<?php
  require "./database/dataconn.php";
  require "cookies.php";

  $product =$_GET['id'];
  $page =$_GET['page'];
  
  $sql="DELETE FROM products WHERE id='$product'";
 $result=mysqli_query($conn,$sql);
 $result=mysqli_query($conn,"DELETE FROM cart WHERE product_id='$product'");
 $result=mysqli_query($conn,"DELETE FROM wishlist WHERE product_id='$product'");
 $result=mysqli_query($conn,"DELETE FROM ordered_products WHERE product_id='$product'");

 header("Location: inventory.php");  
  ?>