<?php
require "./database/dataconn.php";
session_start();
// if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $pass=md5($_POST['password']);

    $sqlstmt="SELECT * FROM members WHERE Email='$email'";
    $run = mysqli_query($conn, $sqlstmt);
    if ($run) {
        $data =mysqli_fetch_array($run);
        // print_r($data);
        $realpass=$data['password'];
       
        if($realpass==$pass){
            $_SESSION['email'] = $email;
               header("Location:index.php");
        }else{
            
            header("Location:login.php?warn=Email or password do not match");
        }
    }else{
        echo mysqli_error($conn);
        die();
    }
// }else{
//     header("Location:login.php");
// }


?>

?>