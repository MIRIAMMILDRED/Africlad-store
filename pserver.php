<?php
 require "./database/dataconn.php";
 session_start();
 if (isset($_SESSION['Full_names'])) {
     header('Location:login.php');
     
 }
 require "./cookies.php";
//  values //
 $Productname=mysqli_real_escape_string ($conn, $_POST['product_name']);
$price=mysqli_real_escape_string ($conn, $_POST['Price']);
$description=mysqli_real_escape_string ($conn, $_POST['Description']);
$category=(mysqli_real_escape_string ($conn, $_POST['category']));
// $file1=(mysqli_real_escape_string ($conn, $_POST['image']));
// $file2=(mysqli_real_escape_string ($conn, $_POST['image2']));
$seller=$user_id;
$pic_1 = $_FILES['image']['name'];
$pic_1_tmp_name = $_FILES['image']['tmp_name'];
$pic_1_type = $_FILES['image']['type'];

$pic_1_extension = explode('.', $pic_1);
$actual_pic_1_extension = strtolower(end($pic_1_extension));
$new_pic_1_name = uniqid('', true).".".$actual_pic_1_extension;
$destination_pic_1 = "product_pictures/$new_pic_1_name";
move_uploaded_file($pic_1_tmp_name, $destination_pic_1);

$pic_2 = $_FILES['image2']['name'];
$pic_2_tmp_name = $_FILES['image2']['tmp_name'];
$pic_2_type = $_FILES['image2']['type'];

$pic_2_extension = explode('.', $pic_1);
$actual_pic_2_extension = strtolower(end($pic_2_extension));
$new_pic_2_name = uniqid('', true).".".$actual_pic_2_extension;
$destination_pic_2 = "product_pictures/$new_pic_2_name";
move_uploaded_file($pic_2_tmp_name, $destination_pic_2);

$stock=(mysqli_real_escape_string ($conn, $_POST['stock']));
$color=(mysqli_real_escape_string ($conn, $_POST['color']));

// inserting values to database//
$sql="INSERT INTO products(product_name,Description,Price,image,image2,category,seller,stock,color,time_added) VALUES('$Productname','$description','$price','$new_pic_1_name','$new_pic_2_name','$category','$seller','$stock','$color','$time')";

if (mysqli_query($conn,$sql)) {
    header("Location:addproduct.php");
}else{
    echo mysqli_error($conn);
}


?>