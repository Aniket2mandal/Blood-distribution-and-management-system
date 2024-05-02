<?php
include "database.php";
session_start();
/* $userprofile=$_SESSION['username'];
if($userprofile==true){
}
else{
    header("location:login.php");
} */
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "UPDATE  `bloodmanage`set `status`='deactivate' WHERE `id`='$id'");
    // $_SESSION['error']="User activated Sucessfully";
    header("location:admin.php");
    exit;
}