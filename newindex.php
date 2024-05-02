<?php
session_start();
$userprofile = $_SESSION['username'];
if($userprofile==true){
  
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
 <link rel="stylesheet" href="css/newindex.css">
</head>
<body>
<div class="images">
            <img src="newlogo.jpeg" alt="logo_of_BDMS" style="height: 64px ; width:64px; border-radius: 50%;
            margin-left: 50px; ">
            </div>
        <h3 style="color:lavender; margin-left: 1%; font-size:20px;" >Blood Distribution and Management System</h3>
  <nav>
    <ul><li></li>
    <button><a href="home.php">Home</a></button>
      <li class="dropdown">
        <button>Blood Stock Bank</button>
        <div class="dropdown-data">
          <a href="bhaktapur.php">Bhaktapur NRCS Blood Bank</a>
          <a href="nrcs.php">Central NRCS Blood Bank</a>
        </div>
      </li>
      <li class="dropdown">
        <button><a href="donorinfo.php" style="text-decoration: none; color:#f2f2f2;">Donor Details</a></button>
      </li>
    </ul>
  </nav>

  <div class="body1">
    <h1> Blood Bank Information</h1>
  </div>
  
  <div style="text-align: center; color:#8c0000; font-size: 35px; font-weight: bold; margin-top: 3%;" >Blood Bank 
  Available near Kathmandu Valley</div>
  <div class="info">
    <div class="info1"><span style="font-size: 19px; color: #d11c1c;">Bhaktapur NRCS Blood Bank </span><br> 01-6612266, 01-6611661</div>
    <div class="info2"><span style="font-size: 19px; color: #d11c1c;">Central NRCS Blood Bank </span><br> Soaltee-Mode, 01- 4288485</div>
  </div>

<div class="imgo">
  <div class="box1"><image src="pngtree-blood-drop-blood-red-cartoon-illustration-png-image_6694336.png" 
  style="height:500px; width: 500px; overflow: hidden; 
    border-bottom-right-radius: 90%;
    border-top-right-radius: 90%; opacity: 0.9; margin-top: 5%;"></image></div>
  <div class="box2"><p>
      The Blood Management And Distribution System is designed close to the ability to facilitate seamless
    communication and collaboration among blood banks, hospitals, and other health care facilities.
  The system allows for efficient co-ordination of blood product requests, transfers, and deliveries by utlizing 
interoperable interfaces and secure date exchange protocols for efficient co-ordination of blood product requests, transfers and delivers. </p>
      <span style="float: right; background-color: rgb(140, 1, 1); font-style: normal; color: white;">Blood Management and Distribution System</span></div>
</div>

  <footer>
    <div class="div1"><a  style="text-decoration: none; color: rgba(0, 0, 0, 0.683);">Contact us<br><span><a href="https://www.google.com/gmail/about/" class="gmail"> bmds45@gmail.com</a></span><br>+977 9810000000</a><br>
      <a class="link" href="https://www.facebook.com/profile.php?id=100079188882330"><img src="facebook-logo-facebook-icon-free-free-vector.jpg" style="height: 40px; width: 40px; margin-left: -5%; border-radius: 50%;"> </a>
      <a class="link" href="https://www.instagram.com/accounts/login/"><img src="download.png" style="height: 40px; width: 40px; border-radius: 50%;
        background-color: blue;"> </a> </div>
    <div class="div2" style="text-decoration: none; color:rgba(0, 0, 0, 0.683); text-align: justify;">About us<span>
    <br>We are a web-based system that may help with blood information in emergency situations. With the aid of our system, 
    users can quickly learn about the types and quantities of blood available at blood banks.</span>
  </div>
    <div class="div3"></div>
  </footer>
</body>
</html>
