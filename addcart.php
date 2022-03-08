<?php
  require "./database/dataconn.php";
  require "cookies.php";

  $product =$_GET['id'];
  $page =$_GET['page'];

  $stmt = mysqli_query($conn, "SELECT * FROM cart WHERE product_id='$product' AND user_idx='$user_id'");
  if (mysqli_num_rows($stmt) > 0) {
    header("Location: $page?message=Product is already in cart");  
  }else{
    $sql="INSERT INTO cart(user_idx,product_id) VALUES ('$user_id','$product')";
    $result=mysqli_query($conn,$sql);
    header("Location: $page");  
  }
  

  ?>