<?php
  require "./database/dataconn.php";
  require "cookies.php";

  $product =$_GET['id'];
  $page =$_GET['page'];
  
 $sql="INSERT INTO cart(user_idx,product_id) VALUES ('$user_id','$product')";
 $result=mysqli_query($conn,$sql);

 header("Location: $page");  
  ?>