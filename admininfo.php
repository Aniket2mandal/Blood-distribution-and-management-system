<?php
session_start();
$username=$_SESSION['username'];
if($username==true){

}
else{
    header("location:sign_in.html");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Management And Distribution System</title>
  <link rel="icon" type="image" href="istockphoto-1171700662-640x640.jpg">
  <link rel="stylesheet" href="css/admininfo.css">
 <head>
<body>
  <nav>
  <div class="images">
            <img src="newlogo.jpeg" alt="logo_of_BDMS" style="height: 64px ; width:64px; border-radius: 50%;
            margin-left: 50px; ">
            </div>
        <h3 style="color:lavender; margin-left: 1%; font-size:20px;" >Blood Distribution and Management System</h3>
    <ul>
    <li class="dropdown">
            <button><a href="admin.php">Home</a></button>
            <div class="dropdown-data"></div>
          </li>
      <li class="dropdown">
        <button>Blood Stock Bank</button>
        <div class="dropdown-data">
        <a href="adminbhaktapur.php">Bhaktapur NRCS Blood Bank</a>
          <a href="adminnrcs.php">Central NRCS Blood Bank</a>
        </div>
      </li>
      <li class="dropdown">
        <button><a href="donorinfo.php" style="text-decoration: none; color:white; " >Donor Profile</a></button>
        <div class="dropdown-data">
          
        </div>
      </li>
    </ul>
  </nav>

  <div class="body1">
    <h1> Admin Profile</h1>
    <!-- <img src="rbc.jpg"> -->
    <table class="tables">
        <tr>
        <td>Name : </td>
        <td>
        <?php
        // session_start();
        include "database.php";
        $username=$_SESSION['username'];
       
    $sql=mysqli_query($conn,"SELECT `fname`,`lname` FROM `bloodmanage` WHERE `email`= '$username'");
$rows=mysqli_num_rows($sql);
if($rows>0){
    $rata=implode(mysqli_fetch_assoc($sql));
    echo $rata;
}
?>
    </td>
       
</tr>

<tr>
<td>Age : </td>
 <td>

 <?php
        include "database.php";
       
        $username=$_SESSION['username'];
    $sql=mysqli_query($conn,"SELECT `age`FROM `bloodmanage` WHERE `email`='$username'");
$rows=mysqli_num_rows($sql);
if($rows>0){
    $rata=implode(mysqli_fetch_assoc($sql));
    echo $rata;
}
?>
 </td>
</tr> 

<tr>
 <td>
    Email : 
 </td>

 <td>
 <?php
        include "database.php";
        
        $username=$_SESSION['username'];
    $sql=mysqli_query($conn,"SELECT `email`FROM `bloodmanage` WHERE `email`='$username'");
$rows=mysqli_num_rows($sql);
if($rows>0){
    $rata=implode(mysqli_fetch_assoc($sql));
    echo $rata;
}
?>
 </td>
</tr>

<tr>
 <td>
Weight : 
 </td>

 <td>
 <?php
        include "database.php";
        $username=$_SESSION['username'];
    $sql=mysqli_query($conn,"SELECT `weig`FROM `bloodmanage` WHERE `email`='$username'");
$rows=mysqli_num_rows($sql);
if($rows>0){
    $rata=implode(mysqli_fetch_assoc($sql));
    echo $rata;
}
?>
 </td>

</tr>

<tr>
 <td>
Allergy : 
 </td>

 <td>
 <?php
        include "database.php";
        $username=$_SESSION['username'];
    $sql=mysqli_query($conn,"SELECT `allergy`FROM `bloodmanage` WHERE `email`='$username'");
$rows=mysqli_num_rows($sql);
if($rows>0){
    $rata=implode(mysqli_fetch_assoc($sql));
    echo $rata;
}
?>
 </td>
</tr>

<tr>
 <td>
Blood Group : 
 </td>

 <td>
  <?php
        include "database.php";
        $username=$_SESSION['username'];
    $sql=mysqli_query($conn,"SELECT `bloodg`FROM `bloodmanage` WHERE `email`='$username'");
$rows=mysqli_num_rows($sql);
if($rows>0){
    $rata=implode(mysqli_fetch_assoc($sql));
    echo $rata;
}
?> 
 </td>

</tr>
  
    </table><br><br><br>
    <form class="forms">
  <button type ="submit" id="log"><a href="logout.php">LOGOUT</a></button>
  <!-- <button type="submit" id="donate" ><a href="donated.php">DONATED</button> -->
  </form>
  </div>
  


  <br><br>
  <footer style="margin-top: 70px;">
    <div class="div1"><a  style="text-decoration: none; color: rgba(0, 0, 0, 0.683);">Contact us<br><span><a href="https://www.google.com/gmail/about/" class="gmail"> bmds45@gmail.com</a></span><br>+977 9810000000</a><br>
      <a class="link" href="https://www.facebook.com/profile.php?id=100079188882330"><img src="facebook-logo-facebook-icon-free-free-vector.jpg" style="height: 40px; width: 40px; margin-left: -5%; border-radius: 50%;"> </a>
      <a class="link" href="https://www.instagram.com/accounts/login/"><img src="download.png" style="height: 40px; width: 40px; border-radius: 50%;
        background-color: blue;"> </a> </div>
    <div class="div2" style="text-decoration: none; color:rgba(0, 0, 0, 0.683); text-align: justify;">About us<span>
    <br>We are a web-based system that may help with blood information in emergency situations. With the aid of our <br>system, 
    users can quickly learn about the types and quantities of blood available at blood banks.</span>
  </div>
    <div class="div3"></div>
  </footer>
</body>
</html>

</body>
</html>