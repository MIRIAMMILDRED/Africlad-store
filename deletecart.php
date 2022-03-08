<?php
  require "./database/dataconn.php";
  require "cookies.php";

  $product =$_GET['id'];
  $page =$_GET['page'];
  
  $sql="DELETE FROM cart WHERE user_idx='$user_id' AND product_id='$product'";
 $result=mysqli_query($conn,$sql);

 header("Location: $page");  
  ?>