<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=\, initial-scale=1.0">
        <title>Blood Bank</title>
        <link rel="icon" type="image" href="istockphoto-1171700662-640x640.jpg">
        <link rel="stylesheet" href="css/donorlogin1.css">
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
            <a href="bhaktapur.html">Bhaktapur NRCS Blood Bank</a>
          <a href="nrcs.html">Central NRCS Blood Bank</a>
              <!-- <a href="">Lalitpur NRCS Blood Bank</a>
              <a href="">Frontline Hospital Blood Bank</a>
              <a href="">Teaching Hospital</a> -->
            </div>
          </li>
          <li class="dropdown">
            <button>Donor</button>
            <div class="dropdown-data">
              <a href="donorlogin.html">Donor login</a>
            </div>
          </li>
          
        </ul>
      </nav>
    <form action="donorlogin.php" method="post" class="donor">
        <h2>Donor login</h2><br>
        First Name<br>
        <input type="text" name="fnames" id="fname" placeholder="Enter your first name"><br><br>
        Last Name<br>
        <input type="text" name="lnames" id="lname" placeholder="Enter your last name"><br><br>
        Age<br>
        <input type="text" name="ages" id="age" placeholder="Enter your age"><br><br>
        Weight<br>
        <input type="text" name="weights" id="weight" placeholder="Enter your weight"><br><br>
        Allergy/ Diseases if any:<br>
        <textarea id="allergy" rows="3" cols="70" name="allergys" id="allergy"></textarea><br><br>
        <input type="submit" id="sub" name="submit"><br><br><br><br>
        
    </form>




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