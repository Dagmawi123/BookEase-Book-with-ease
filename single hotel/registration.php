<?php
require 'config.php';
if(!empty($_SESSION["id"]))
header("Location: index.php");
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT *FROM tbl_user 
    WHERE username = '$username' OR email = '$email'");
       
     if(mysqli_num_rows($duplicate)>0){
    echo "<script>alert('Username or Email is already taken by another user');</script>";
    }else {
       if($password == $confirmpassword){
        $query = "INSERT INTO tbl_user VALUES('','$name','$username','$email','$password')";
        mysqli_query($conn,$query);
        echo "<script>alert('Registration is Successful!');</script>";
       }
        else{
            echo "<script>alert('Password does not match');</script>";
        }   
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Registration</title>
</head>
<body>
     
    <header class="header" id="navigation-menu">
    <div class="container">
      <nav>
        <a href="#" class="logo"> <img src="" alt=""> </a>
        <ul class="nav-menu">
          <li> <a href="#home" class="nav-link">Home</a> </li>
          <li> <a href="#about" class="nav-link">About</a> </li>
          <li> <a href="#rooms" class="nav-link">Rooms</a> </li>
          <li> <a href="#contact" class="nav-link">Contact</a> </li>
        </ul>
         <div class="navpanel">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>
  </header>
  <section class="home">
    <div class="head_container">
      <div class="box">
        <div class="text">
          <h1>Hello! Welcome to our hotel's Main Page</h1>
          </div>
      </div>
      <div class="image">
        <img src="image/home3.jpg">
      </div>
    </div>
  </section>
  <form action="./index.php" method="post">
  <section class="book" id="home">
    <div class="container flex">
      <div class="input grid">
        <div class="box">
          <label>Check-in:</label>
          <input type="date" placeholder="Check-in-Date" required>
        </div>
        <div class="box">
          <label>Check-out:</label>
          <input type="date" placeholder="Check-out-Date" required>
        </div>
        <div class="box">
          <label>Person:</label> <br>
          <input type="number" placeholder="0" min="0" max="6" required>
        </div>
        <div class="box">
          <label>Children:</label> <br>
          <input type="number" placeholder="0" min="0" max="4" required>
        </div>
      </div>
      <div class="search">
        <input type="submit" value="Search" class="booking_form_button">
      </div>
    </div>
  </section>
</form>
  <style>
#registerform{
    position: fixed;
    left: 25%;
    top: 3%;
    background-color: white;
    padding: 3%;
  }
  #submit{
    position: relative;
    width: 70%;
    top: 15%;
    margin-top: 4%;
    left: 28%;
    padding:2%;
  }  
   #cancelbtn{
    padding: 2%;
    position: relative;
    left: 100%;
    top: 1%;
  } 
  </style>
    <form id="registerform" action="" method="post">
    <button id="cancelbtn" onclick="window.location='body.html';" > <b> X </b></button>
    <h2>Registration</h2><br>
       <label for="name">Name  </label>
       <input type="text" name="name" id="name" required value=""><br>

       <label for="username">Username  </label>
       <input type="text" name="username" id="username" required value=""><br>

       <label for="email">Email  </label>
       <input type="text" name="email" id="email" required value=""><br>

       <label for="password">Password  </label>
       <input type="password" name="password" id="password" required value=""><br>

       <label for="confirmpassword">Confirm Password  </label>
       <input type="password" name="confirmpassword" id="confirmpassword" required value=""><br>
 
       <button type="submit" name="submit" id="submit" >Register</button> <br>
         <a href="login.php">Login</a> 
    </form>





    <section class="about top" id="about">
    <div class="container flex">
      <div class="left">
        <div class="img">
          <img src="image/a1.jpg" alt="" class="image1">
          <img src="image/a2.jpg" alt="" class="image2">
        </div>
      </div>
      <div class="right">
        <div class="heading">
          <h5>RAISING COMFOMRT TO THE HIGHEST LEVEL</h5>
          <h2>Welcome to Luviana Hotel Resort</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="room top" id="rooms">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>RAISING COMFORT TO THE HIGHEST LEVEL</h5>
          <h2>Rooms $ Suites</h2>
        </div>
      </div>
      <div class="content grid">

        <div class="box">
          <div class="img">
            <img src="image/r1.jpg" alt="">
          </div>
          <div class="text">
            <h3>Superior Soble Rooms</h3>
            <p> <span>$</span>129 <span>/per night</span> </p>
          </div>
        </div>

        <div class="box">
          <div class="img">
            <img src="image/r2.jpg" alt="">
          </div>
          <div class="text">
            <h3>Superior Soble Rooms</h3>
            <p> <span>$</span>129 <span>/per night</span> </p>
          </div>
        </div>

        <div class="box">
          <div class="img">
            <img src="image/r3.jpg" alt="">
          </div>
          <div class="text">
            <h3>Superior Soble Rooms</h3>
            <p> <span>$</span>129 <span>/per night</span> </p>
          </div>
        </div>

        <div class="box">
          <div class="img">
            <img src="image/g6.jpg" alt="">
          </div>
          <div class="text">
            <h3>Superior Soble Rooms</h3>
            <p> <span>$</span>129 <span>/per night</span> </p>
          </div>
        </div>

        <div class="box">
          <div class="img">
            <img src="image/g3.jpg" alt="">
          </div>
          <div class="text">
            <h3>Superior Soble Rooms</h3>
            <p> <span>$</span>129 <span>/per night</span> </p>
          </div>
        </div>

      </div>
    </div>
  </section>

    <footer>
    <div class="container grid top">
      <div class="box"></div>
      <div class="box">
        <h3>Recent News</h3>
        <ul>
          <li>Our Secret Island Boat Tour Is Just for You</li>
          <li>Chill and Escape in Our Natural Shelters</li>
          <li>September in Luviana Hotel</li>
          <li>Live Music Concerts at Luviana</li>
        </ul>
      </div>
      <div class="box">
        <h3>For Customers</h3>
        <ul>
          <li>About Luviana</li>
          <li>Customer Care/Help</li>
          <li>Corporate Accounts</li>
          <li>Financial Information</li>
          <li>Terms & Conditions</li>
        </ul>
      </div>
      <div class="box" id="contact">
        <h3>Contact Us</h3>
        <ul>
          <li>3015 Grand Ave, Cocount Grove, Merrick Way FL 123456</li>
          <li><i></i>demoexample@gmail.com </li>
          <li><i></i>123 456 7898 </li>
          <li><i></i>123 456 7898 </li>
          <li><i></i>24/ 7 Customer Services </li>
        </ul>
      </div>
    </div>
  </footer>

</body>
</html>