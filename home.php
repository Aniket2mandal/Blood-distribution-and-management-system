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
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f2f2f2;;
      
      /* overflow: hidden; */
      
    }
    /* Style for custom scrollbar (webkit browsers) */
    body::-webkit-scrollbar {
      width: 0.1em;
    }

    body::-webkit-scrollbar-thumb {
      background-color:gold; /* You can set the color to match your background */
    }
    nav {
      background-color:#a61111;
      padding: 0px;
      padding-bottom: 1.6px;
      display: flex;
      justify-content: space-between;
      /* align-items: center; */
    }
    ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      margin-left: auto; 
      margin-right: 10%;

      
    }

    .dropdown {
      position: relative;
    }

    .dropdown button {
      background-color:#8c0000;;
      color: #ffffff;
      padding: 25px;
      border: none;
      cursor: pointer;
      font-size: 15px;
    }
    .dropdown button:hover{
        background-color: #740000;;
    }

    .dropdown-data {
      display: none;
      position: absolute;
      background-color: #740000;
      min-width:250px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown:hover .dropdown-data{
      display: block;
    }

    .dropdown-data a {
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-data a:hover {
      background-color:rgb(163, 30, 30);
      text-decoration: underline;
    }
    .body1 h1{
       color: white;
       background-color: #8c0000;;
       margin-top: -0.1%;
       padding: 80px;
       text-align: center;
       border-bottom-left-radius: 50% 50px;
       border-bottom-right-radius: 50% 50px;
       padding-bottom: 35px;
    }
    .info{
      background-color:transparent;
      display: grid;
      grid-template-columns: 33% 33% 33%;
      padding: 50px;
      margin-left: 5%;
      margin-right: 5%;
      /* border: 0.5px solid darkred; */
      background-color:transparent;
    }
    .info1{
      background-color: #fefefe;
      padding: 10px;
      margin-right: 5%;
      text-align: center;
      color: rgb(0, 0, 0);
      font-size: 14px;
      border: 2px solid rgba(255, 0, 0, 0.053);
      border-radius: 2px;
    }
    .info2{
      background-color:  #fefefe;
      padding: 10px;
      margin-right: 5%;
      text-align: center;
      color: rgb(0, 0, 0);
      font-size: 14px;
      border: 2px solid rgba(255, 0, 0, 0.053);
      border-radius: 2px;
    }
    .info3{
      background-color: #fefefe;
      padding: 10px;
      margin-right: 5%;
      text-align: center;
      color: rgb(0, 0, 0);
      font-size: 14px;
      border: 2px solid rgba(255, 0, 0, 0.053);
      border-radius: 2px;
    }
    footer{
      display: grid;
      grid-template-columns: 15% 60% 0%;
      padding: 80px;
      /* bottom: 20px; */
      width: 89.5%;
      /* position: absolute; */
      background-color: rgb(237, 235, 235);
      /* height: 2vh; */
      padding-top: 15px;
      color: black;
    }
    .imgo{
      display: grid;
      grid-template-columns: 50% 50%;
      background-color:transparent;
    }
    .box2{
      margin-left: -35%;
      color: rgba(0, 0, 0, 0.589);
      font-size: x-large;
      font-style: italic;
      margin-top: 8%;
    }
    .gmail{
      text-decoration: none;
    }
    .gmail:hover{
      text-decoration: underline;
    }
    .link{
      text-decoration: none;
    }
    .dropdown button a{
      text-decoration: none;
      color: white;
    }
  </style>
</head>
<body>
  <nav>
          <div class="images">
            <img src="newlogo.jpeg" alt="logo_of_BDMS" style="height: 64px ; width:64px; border-radius: 50%;
            margin-left: 50px; ">
            </div>
        <h3 style="color:lavender; margin-left: 1%; font-size:20px;" >Blood Distribution and Management System</h3>
    <ul>
    <li class="dropdown">
            <button><a href="home.php">Home</a></button>
            <div class="dropdown-data"></div>
          </li>
      <!-- <li class="dropdown">
        <button>Blood Availability</button>
        <div class="dropdown-data">
          <a href="#">A+</a>
          <a href="#">B+</a>
          <a href="#">AB+</a>
          <a href="#">O+</a>
          <a href="#">A-</a>
          <a href="#">B-</a>
          <a href="#">AB-</a>
          <a href="#">O-</a>
        </div>
      </li> -->
      <li class="dropdown">
        <button>Blood Stock Bank</button>
        <div class="dropdown-data">
          <a href="bhaktapur.php">Bhaktapur NRCS Blood Bank</a>
          <a href="nrcs.php">Central NRCS Blood Bank</a>
          <!-- <a href="">Lalitpur NRCS Blood Bank</a>
          <a href="">Frontline Hospital Blood Bank</a>
          <a href="">Teaching Hospital</a> -->
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
    <h1> Blood Bank Information</h1>
  </div>
  
  <div style="text-align: center; color:#8c0000; font-size: 35px; font-weight: bold; margin-top: 3%;" >Blood Bank 
  Available near Kathmandu Valley</div>
  <div class="info">
    <div class="info1"><span style="font-size: 19px; color: #d11c1c;">Bhaktapur NRCS Blood Bank </span><br> 01-6612266, 01-6611661</div>
    <div class="info2"><span style="font-size: 19px; color: #d11c1c;">Central NRCS Blood Bank </span><br> Soaltee-Mode, 01- 4288485</div>
    <!-- <div class="info3"><span style="font-size: 19px; color: #d11c1c;">Lalitpur NRCS Blood Bank</span><br>Pulchowk, +97715427033</div>
  </div>
  <div class="info">
    <div class="info1"><span style="font-size: 19px; color: #d11c1c;">Frontline Hospital Blood Bank</span><br> Old Baneshwor, 01-5970132</div>
    <div class="info2"><span style="font-size: 19px; color: #d11c1c;">Teaching Hospital</span><br> Teaching, 01-4412303</div> -->
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
