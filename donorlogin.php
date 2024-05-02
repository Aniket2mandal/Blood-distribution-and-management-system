<?php
session_start();
$email=$_SESSION['username'];
    $first=$_POST['fnames'];
    $last=$_POST['lnames'];
    $ag=$_POST['ages'];
    $weigh=$_POST['weights'];
    $allerg=$_POST['allergys'];
    include "database.php";

    $sql=mysqli_query($conn,"INSERT INTO `donord`(`fname`,`lname`,`age`,`weight`,`allergy`,`email`)
    values('$first','$last','$ag','$weigh','$allerg','$email')");
    // $fet=mysqli_query($conn,"SELECT `fname`,`lname`,`age`,`weight`,`allergy` from `donord` where `email`='$email'");
    // $row=mysqli_num_rows($sql);
    // if($row>0){
    //     $rata=implode(mysqli_fetch_assoc($sql));
    header("location:donorinfo.php");
    // }
 ?>
