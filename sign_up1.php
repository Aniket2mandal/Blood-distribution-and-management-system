
<?php
session_start();
$firstname = $_POST['fnames'];
$lastname = $_POST['lnames'];
$age = $_POST['ages'];
$weight = $_POST['weights'];
$bloodg = $_POST['blood']; 
$email = $_POST['em'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$allergy = $_POST['allergys'];
if($pass == $cpass && $age>=18 && $weight>=50 && strlen($pass)>=8){
    include "database.php";
    $sql=mysqli_query($conn,"INSERT INTO `bloodmanage`(`fname`,`lname`,`age`,`weig`,`bloodg`,`email`,`passwo`,`cpasswo`,`allergy`)
    VALUES('$firstname','$lastname','$age','$weight','$bloodg','$email','$pass','$cpass','$allergy')");
    header("location:sign_in.html");
}
else{
    if($age<18){
        $_SESSION['ageerror']="*Age must be greater than 18";
        header("location:sign_up.php");
    }
     if($weight<50){
        $_SESSION['weighterror']="*Weight must be greater than 50";
        header("location:sign_up.php");
    }
     if(strlen($pass)<8){
$_SESSION['passerror']="*Password length must be greater than 8";
header("location:sign_up.php");
    }

}

// else if($weight>=50){
//     include "database.php";
//     header("location: sign_in.html");
// }
// else {
//     $_SESSION['err'] = "*Weight Should be above 50 or 40!*";
//     header("location: sign_up.php");
// }

// $pattern = '/^[a-zA-Z0-9._%+-]+@gmail\.com$/';
// if(preg_match($pattern, $email)){
//     include "database.php";
//     header("location: sign_in.html");
// }
// else{
//     $_SESSION['erro'] = "*Invalid Email*";
//     header("location: sign_up.php");
// }



// else{
//     $_SESSION['erorred']= "*Password must be length of 8!*";
//     header("location: sign_up.php");
// }
?>

