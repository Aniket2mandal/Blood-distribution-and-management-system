<?php
session_start();
$username = $_SESSION['username'];
if ($username == true) {
} else {
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
  <link rel="stylesheet" href="css/admin.css">
</head>

<body>
  <nav>
    <div class="images">
      <img src="newlogo.jpeg" alt="logo_of_BDMS" style="height: 64px ; width:64px; border-radius: 50%;
            margin-left: 50px; ">
    </div>
    <h3 style="color:lavender; margin-left: 1%; font-size:20px;">Blood Distribution and Management System</h3>
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
        <button><a href="admininfo.php" style="text-decoration: none; color:white;">Admin Profile</a></button>
        <div class="dropdown-data">
        </div>
      </li>
    </ul>
  </nav>

  <div class="body1">
    <h1> Add Blood and Delete Donor</h1>
  </div><br><br>

  <div class="content2">
    <div class="content2-child">
      <h1 style="text-align: center;">DONOR AVAILABILITY</h1>
      <table class="tabledonor" cellspacing="7">
        <tr>
          <th>ID</th>
          <th>Donor Name</th>
          <th>Age</th>
          <th>Blood Group</th>
          <th>Donated</th>
          <th width="10%;">EDIT</th>
        </tr>
        <?php
        include "database.php";
        $sql = mysqli_query($conn, "SELECT `id`,`email`,`age`,`bloodg`,`donatedinfo` FROM `bloodmanage` WHERE `email` !='linda@gmail.com'");
        $row = mysqli_num_rows($sql);
        if ($row > 0) {
          $i = 1;
          while ($result = mysqli_fetch_assoc($sql)) {

            echo "
                    <tr>
                    <td>" . $i . "</td>
                    <td>" . $result['email'] . "</td>
                    <td>" . $result['age'] . "</td>
                    <td>" . $result['bloodg'] . "</td>
                    <td>" . $result['donatedinfo'] . "</td>
                    <td>
                    <div class='action'>
                    <a onClick=\"javascript: return confirm('Are you sure you want to deactivate?');\" href='deactivateuser.php?id=" . $result['id'] . "'class='delbtn' ><input type='button' value='Deactivate' id='deletebtn'></a>
                    <a  onClick=\"javascript: return confirm('Are you sure you want to activate?');\" href='activateuser.php?id=" . $result['id'] . "'class='delbtn' ><input type='button' value='Activate' id='deletebtn'></a>
                          <a onClick=\"javascript: return confirm('Are you sure you want to delete?');\"
                           href='deleteuseradm.php?id=" . $result['id'] . " 'class='delbtn'><input type='button' value='Delete' id='deletebtn'></a>
                    </div>
                           </tr>";
                    $i++;
          }
        }
        ?>
      </table><br><br><br>
      <table class="table2">
        <tr>
          <th>ID</th>
          <th>Bloods</th>
          <th>Blood Bank</th>
          <th>Action</th>
        </tr>
        <?php
        include "database.php";
        $sql = mysqli_query($conn, "SELECT `id`,`bloods`,`bloodbank`FROM `bhaktpur` ");
        $row = mysqli_num_rows($sql);
        if ($row > 0) {
          $i = 1;
          while ($result = mysqli_fetch_assoc($sql)) {

            echo "
                    <tr>
                    <td>" . $i . "</td>
                    <td>" . $result['bloods'] . "</td>
                    <td>" . $result['bloodbank'] . "</td>
                    <td>

                          <a onClick=\"javascript: return confirm('Are you sure you want to update?');\"
                           href='updatebloodadm.php?id=" . $result['id'] . " 'class='delbtn'><input type='button' value='Update' id='deletebtn'></a>
                    </tr>";
                    $i++;
          }
        }
        ?>
      </table>

      <table class="table2">
        <h2>Donated Info</h2>
        <tr>
          <th>ID</th>
          <th>Email</th>
          <th>Blood Bank</th>
          <th>Blood</th>
        </tr>
        <?php
        include "database.php";
        $sql = mysqli_query($conn, "SELECT `email`,`donatedbank`,`donatedblood`FROM `bloodmanage`WHERE `donatedinfo`='donated' ");
        $row = mysqli_num_rows($sql);
        if ($row > 0) {
          $i = 1;
         
          while ($result = mysqli_fetch_assoc($sql)) {

            echo "
                    <tr>
                    <td>" . $i . "</td>
                    <td>" . $result['email'] . "</td>
                    <td>" . $result['donatedbank'] . "</td>
                    <td>" . $result['donatedblood'] . "</td>   
                    </tr>";
                    $i++;
          }
        }
        ?>
      </table>
      <div class="btons">
        <a href="addblood.php"><button type="submit" id="add">Add Blood</button></a>
        <a href="deletblood.php"><button type="submit" id="delete">Delete Blood</button></a>
      </div>
    </div>
  </div>






  <footer>
    <div class="div1"><a style="text-decoration: none; color: rgba(0, 0, 0, 0.683);">Contact us<br><span><a href="https://www.google.com/gmail/about/" class="gmail"> bmds45@gmail.com</a></span><br>+977 9810000000</a><br>
      <a class="link" href="https://www.facebook.com/profile.php?id=100079188882330"><img src="facebook-logo-facebook-icon-free-free-vector.jpg" style="height: 40px; width: 40px; margin-left: -5%; border-radius: 50%;"> </a>
      <a class="link" href="https://www.instagram.com/accounts/login/"><img src="download.png" style="height: 40px; width: 40px; border-radius: 50%;
        background-color: blue;"> </a>
    </div>
    <div class="div2" style="text-decoration: none; color:rgba(0, 0, 0, 0.683); text-align: justify;">About us<span>
        <br>We are a web-based system that may help with blood information in emergency situations. With the aid of our system,
        users can quickly learn about the types and quantities of blood available at blood banks.</span>
    </div>
    <div class="div3"></div>
  </footer>
</body>

</html>