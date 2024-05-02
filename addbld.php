<?php
$blood=$_POST['blood'];
$bloodbank=$_POST['bank'];
// echo $blood .$bloodbank;
include "database.php";
$sql=mysqli_query($conn,"INSERT INTO `bhaktpur`(`bloods`,`bloodbank`)VALUES('$blood','$bloodbank')");
header("location:addblood.php");
?>