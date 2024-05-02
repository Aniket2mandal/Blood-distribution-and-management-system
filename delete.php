
<?php


$bloodbank=$_POST['bank'];
$bloodgroup=$_POST['blood'];

    // echo $id . $email;
include "database.php";

$sql=mysqli_query($conn,"DELETE FROM `bhaktpur` WHERE `bloodbank`='$bloodbank' and `bloods`='$bloodgroup'");
header ("location:deletblood.php");





?>