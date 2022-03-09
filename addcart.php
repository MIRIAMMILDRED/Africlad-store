<?php
  require "./database/dataconn.php";
  require "cookies.php";

  if (isset($_POST['submit'])) {
    $product =$_POST['id'];
    $page =$_POST['page']; 
    $quantity = $_POST['quantity'];
  }else{
    $product =$_GET['id'];
    $page =$_GET['page']; 
    $quantity = 1;
  }

  $stmt = mysqli_query($conn, "SELECT * FROM cart WHERE product_id='$product' AND user_idx='$user_id'");
  if (mysqli_num_rows($stmt) > 0) {
    header("Location: $page?message=Product is already in cart");  
  }else{
    $sql="INSERT INTO cart(user_idx,product_id, quantity) VALUES ('$user_id','$product', '$quantity')";
    $result=mysqli_query($conn,$sql);
    header("Location: $page");  
  }
  

  ?>