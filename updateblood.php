<?php
include "database.php";
$blood=$_POST['blood'];
$bloodbank=$_POST['bank'];
 $id=$_POST['id'];

//  echo $blood.$bloodbank.$id;
 $sql=mysqli_query($conn,"UPDATE `bhaktpur` SET `bloods`='$blood' WHERE `id`='$id'");
 $sqll=mysqli_query($conn,"UPDATE `bhaktpur` SET `bloodbank`='$bloodbank' WHERE `id`='$id'");
 header("location:admin.php");
?>