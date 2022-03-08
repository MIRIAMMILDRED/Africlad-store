<?php
  require "./database/dataconn.php";
  require "cookies.php";

  $product =$_GET['id'];
  $page =$_GET['page'];
  
  $sql="UPDATE products SET verification='verfied' WHERE id='$product'";
 $result=mysqli_query($conn,$sql);

 header("Location: recentuploads.php");  
  ?>