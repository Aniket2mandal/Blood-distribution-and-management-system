<?php
session_start();
$user=$_POST['user'];
$passw=$_POST['pass'];
// echo $user,$passw;
include "database.php";
// $emai=mysqli_query($conn,"SELECT `email`FROM `bloodmanage` WHERE `email`='$user'");
$sql=mysqli_query($conn,"SELECT `passwo`FROM `bloodmanage` WHERE `email`='$user'");
$sqll=mysqli_query($conn,"SELECT `status`FROM `bloodmanage` WHERE `email`='$user'");
$rows=mysqli_num_rows($sql);
if($rows>0){
  
    $rata=implode(mysqli_fetch_assoc($sql));
    $status=implode(mysqli_fetch_assoc($sqll));
    // echo  $rata;
    if($status != "deactivate"){
    if($rata == $passw){
        $_SESSION['username']=$user;
        // header("location:home.php");
        if($user=="linda@gmail.com"){
            header("location:admin.php");
        }
        else{
    header("location:home.php");
        }
    }
    else{
        header("location:sign_in.html");
    }
}
else{
    header("location:sign_in.html");
}
}

?>