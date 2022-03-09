<?php
require "./database/dataconn.php";
require "./cookies.php";
$num = mysqli_query($conn, "SELECT * FROM cart WHERE user_idx='$user_id'");
$number_of_cart_items = mysqli_num_rows($num);

$total_price = 0;
$sql="SELECT * FROM cart WHERE user_idx='$user_id'";
$result=mysqli_query($conn,$sql);
while ($myprod=mysqli_fetch_array($result)) {
    $id_product = $myprod['product_id'];
    $sqlstmt="SELECT * FROM products WHERE id='$id_product'";
    $result2=mysqli_query($conn,$sqlstmt);
    $product_info=mysqli_fetch_array($result2);
    $total_price=$total_price + ($product_info['Price']*$myprod['quantity']);
}