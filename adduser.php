<?php
require "./database/dataconn.php";
require "cookies.php";
session_start();
 if (!isset($_SESSION['Full_names'])) {
  header('Location: login.php');
 }
// values//
$uname=mysqli_real_escape_string ($conn, $_POST['Full_names']);
$email=mysqli_real_escape_string ($conn, $_POST['Email']);
$phone=mysqli_real_escape_string ($conn, $_POST['Phone_Number']);
$password=md5(mysqli_real_escape_string ($conn, $_POST['Password']));
$conpass=md5(mysqli_real_escape_string ($conn, $_POST['cnpass']));

if ($password==$conpass) { 
    // echo 123;
    $sql = "INSERT INTO members(Full_names,Email,Phone_Number,Password) VALUES('$uname','$email','$phone','$password')";
// echo $email;
    // query to check if email is taken //
    $result = mysqli_query($conn, "SELECT * FROM members WHERE Email='$email'");
   
    if(mysqli_num_rows($result)>0){
        header("Location: register.php?warn=email is already taken kindly try another one");
    }else{
        // check if phone exist //
        $result2=mysqli_query($conn, "SELECT * FROM members WHERE Phone_Number='$phone'");
        // alert if phone exists //
        if (mysqli_num_rows($result2)>0) {
            header("Location:register.php?warn=phone number exists please use another");
        }else{
            $add=mysqli_query($conn, $sql);
            if($add){
                $u_info = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM members WHERE email='$email'"));
                $real_user_id = $u_info['id'];
                $old_user_id = $user_id;
                if($user_id != $real_user_id){
                    setcookie('user_id', $real_user_id, time() + (86400 * 30), "/");
                    $sql="UPDATE cart SET user_idx='$real_user_id' WHERE user_idx='$old_user_id'";
                    $result=mysqli_query($conn,$sql);
                }
                header("Location:login.php");
                
            }else{
                echo "Error: " .$sql . "br" .mysqli_error($conn);
            }
        }
    }
    
}else{

    header("Location:register.php?info=password mismatch");
}
$uname="";
$email="";
$phone="";
$password="";
 

mysqli_close($conn);

?>