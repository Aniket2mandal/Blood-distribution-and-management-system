
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Management And Distribution System</title>
  <link rel="icon" type="image" href="istockphoto-1171700662-640x640.jpg">
  <link rel="stylesheet" href="css/updateblood.css">
 
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
    
      <li class="dropdown">
        <button>Blood Stock Bank</button>
        <div class="dropdown-data">
        <a href="bhaktapur.php">Bhaktapur NRCS Blood Bank</a>
          <a href="nrcs.php">Central NRCS Blood Bank</a>
         
        </div>
      </li>
      <li class="dropdown">
      <button><a href="donorinfo.php" style="text-decoration: none; color:white;">Donor Profile</a></button>
        <div class="dropdown-data">
          
        </div>
      </li>
    </ul>
  </nav>

  <div class="body1">
    <h1> Update Blood</h1>
  </div><br><br>
    <form action="donated.php" method="post">

    <select name="blood" id="bloodt">
  <option value="A+" class="opt">A+</option>
  <option value="B+"class="opt">B+</option>
  <option value="AB+"class="opt">AB+</option>
  <option value="O+"class="opt">O+</option>
  <option value="A-"class="opt">A-</option>
  <option value="B-"class="opt">B-</option>
  <option value="AB-"class="opt">AB-</option>
  <option value="O+"class="opt">O-</option>
</select>
<select name="bank" id="bbank">
  <option value="Bhaktpur NRCS Blood Bank" id="bak" >Bhaktpur NRCS Blood Bank</option>
  <option value="Centeral NRCS Blood Bank" id="cen">Centeral NRCS Blood Bank</option>
</select>

<button type="submit" id="buttts">DONATE</button>
    </form>


  
</body>
</html>