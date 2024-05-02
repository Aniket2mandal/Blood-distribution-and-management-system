<?php
include "database.php";
session_start();
$username=$_SESSION['username'];
$bloodbank=$_POST['bank'];
$blood=$_POST['blood'];
if($username==true){
}
else{
    header("location:sign_in.html");
}
$insertbank= mysqli_query($conn,"UPDATE `bloodmanage` set `donatedbank`='$bloodbank' WHERE `email`='$username'");
$insertblood= mysqli_query($conn,"UPDATE `bloodmanage` set `donatedblood`='$blood' WHERE `email`='$username'");
$sql=mysqli_query($conn,"UPDATE `bloodmanage` set `donatedinfo`='donated' WHERE `email`='$username'");
header("location:home.php");
?>