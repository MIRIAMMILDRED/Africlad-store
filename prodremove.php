<?php
  require "./database/dataconn.php";
  require "cookies.php";

  $product =$_GET['id'];
  $page =$_GET['page'];
  
  $sql="DELETE FROM products WHERE id='$product'";
 $result=mysqli_query($conn,$sql);

 header("Location: inventory.php");  
  ?>