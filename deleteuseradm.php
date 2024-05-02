<?php
include "database.php";
 $id=$_GET['id'];
 $sql=mysqli_query($conn,"DELETE FROM `bloodmanage` WHERE `id`='$id'");
 header("location:admin.php");
?>