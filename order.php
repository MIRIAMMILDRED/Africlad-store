<?php
require "./database/dataconn.php";
require "./cookies.php";

$order_id= uniqid('', true);
$sql="INSERT INTO orders(order_id, user_idx)VALUE('$order_id', '$user_id')";
$result=mysqli_query($conn,$sql);

$result2=mysqli_query($conn,"SELECT *  FROM cart WHERE user_idx='$user_id'");
while ($order=mysqli_fetch_array($result2)) {
    $product_id=$order['product_id'];
    $quantity=$order['quantity'];
    $sqlstmt=mysqli_query($conn,"INSERT INTO ordered_products(order_id,product_id,quantity) VALUES('$order_id','$product_id','$quantity')");
    $delete=mysqli_query($conn,"DELETE FROM cart WHERE product_id='$product_id'AND user_idx='$user_id'");
}

$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$comp_name=$_POST['company'];
$Address=$_POST['address'];
$apartment=$_POST['apartment'];
$town=$_POST['city'];
$county=$_POST['county'];
$code=$_POST['code'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$notes=$_POST['notes'];
$sql=mysqli_query($conn,"INSERT INTO billing(First_names,Last_names,county,zip,Email,Phone_Number,comp_name,Adddress,Apartment,town,notes)  
                        VALUES('$first_name','$last_name','$county','$code','$email','$phone','$comp_name','$Address','$apartment','$town','$notes')");
header("Location:index.php");

?>