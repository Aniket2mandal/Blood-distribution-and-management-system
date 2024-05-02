<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="icon" type="image" href="istockphoto-1171700662-640x640.jpg">
    <link rel="stylesheet" href="css/sign_up.css">
</head>
 <body>
    <div class="div1">
   
    <form action="sign_up1.php" method="post"  class="form">
        <label for="signup" id="sign">Sign up</label><br><br>
    
        <label for="fname">First name</label><br>
        <input type="text" name="fnames" id="fname"  required placeholder="Enter your first name"><br><br>
        
        <label for="lname">Last Name</label><br>
        <input type="text" name="lnames" id="lname"  required placeholder="Enter your last name"><br><br>

        <label for="age">Age</label><br>
        <input type="number" name="ages" id="age"  required placeholder="Enter your age"><br>
        <p class="errorp">  
            <?php
            error_reporting(0);
            session_start();
            $error= $_SESSION['ageerror'];
            echo $error;
            if($_SESSION['ageerror']== true){
            $_SESSION['ageerror']="";
                // unset($_SESSION['error']);
            }
           
            ?>
        </p><br><br>
        <label for="weight">Weight</label><br>
        <input type="number" name="weights" id="weight"  required placeholder="Enter your weight"><br>
        <p class="errorp">
            <?php
            error_reporting(0);
            $weig=$_SESSION['weighterror'];
            echo $weig;
            if($_SESSION['weighterror']==true){
                $_SESSION['weighterror']="";
            }
           
            ?>
        </p>
        <br><br>
        <label for="blood">Blood Group</label><br>
        <select id="blood" placeholder="Select your blood group"  name="blood">
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="O+">O+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
                <option value="O-">O-</option>
            </select>
            <br><br>
       
        <!-- <label for="username">Username</label><br><br>
        <input type="text" name="user" required id="username" placeholder="username"><br><br> -->
        <label for="email">Email</label><br>
        <input type="text" name="em" required id="email"  placeholder="email"><br>
        <p class="errorp">
            <?php
            error_reporting(0);
            $weig=$_SESSION['erro'];
            echo $weig;
            if($_SESSION['erro']==true){
                $_SESSION['erro']="";
            }
           
            ?>
        </p><br><br>
        <label for="password">Password</label><br>
        <input type="password"  id="password"  required placeholder="Enter your password"  name="pass"><br>
        <p class="errorp">
            <?php
            error_reporting(0);
            $passw=$_SESSION['passerror'];
            echo $passw;
            if($_SESSION['passerror']==true){
                $_SESSION['passerror']="";
            }
           
            ?>
        </p><br><br>
        <label for="password">Confirm Password</label><br>
        <input type="password" id="conpassword"  required placeholder="Confirm your password" name="cpass"><br><br>
        <label for="allergy">Allergy/ Disease if any:</label><br>
        <textarea id="allergy" rows="3" cols="70" name="allergys" id="allergy"   required placeholder="Enter if you have any diseases...."></textarea><br><br>
        
        <button type="submit" id="button" onclick="submit">Sign up</button><br>
    </form>
        </div>
</body>
</html>