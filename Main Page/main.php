 <?php
require_once('config.php'); 
$fname="Login";
//account info
if(isset($_SESSION['id'])){
  // echo "<script>document.getElementById('Log').textContent=".$_SESSION['id']</script>";
$sql='select *from tbluser where userid='.$_SESSION['id'];
$result=$conn->query($sql);
if($result->num_rows==1){
$row=$result->fetch_assoc();
$fname=$row['fname'];  
$email=$row['email'];
$lname=$row['lname'];

// echo "<script>alert('".$fname."');</script>";
// echo "<script>document.getElementById('Log').textContent='".$fname."';</script>";
}
//account update
if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $email=$_POST['email'];
  $sql="update `tbluser` set `fname`='".$fname."',`email`='".$email."',`lname`='".$lname."' where userid=".$_SESSION['id']; 
  $result=$conn->query($sql);
  echo "<script>alert('Successfully Updated');</script>";
}
}
if(isset($_POST['Radisson']))
{
  // echo "<script>alert('27')</script>";
  if(!isset($_SESSION["id"]))
  {
    $_SESSION['hotelno']=1;
    header("Location:Login/Sign-in.php");
  
}
else  header("Location:../single hotel/body1.php?hotelno=1");
}
else if(isset($_POST['Sheraton']))
{if(!isset($_SESSION['id']))
  {
    $_SESSION['hotelno']=2;
  header("Location:Login/Sign-in.php");  
}
else  header("Location:../single hotel/body1.php?hotelno=2");
}
else if(isset($_POST['Skylight']))
{if(!isset($_SESSION['id']))
  {
    $_SESSION['hotelno']=3;
  header("Location:Login/Sign-in.php");  
}
else  header("Location:../single hotel/body1.php?hotelno=3");
}
else if(isset($_POST['Hilton']))
{if(!isset($_SESSION['id']))
  {
    $_SESSION['hotelno']=4;
  header("Location:Login/Sign-in.php");  
}
else  header("Location:../single hotel/body1.php?hotelno=4");
}
else if(isset($_POST['Hyatt']))
{if(!isset($_SESSION['id']))
  {
    $_SESSION['hotelno']=5;
  header("Location:Login/Sign-in.php");  
}
else  header("Location:../single hotel/body1.php?hotelno=5");
}


?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" href="logo.png" />
    <title>Hotel Booking</title>
  
  </head>
  <body>
<div class="popup" id="pop">
    <div class="overlay"></div>
    <div class="content">
    <form action="" method="post">
      <br>
      <div class="accTitle">Account Info </div><br><br>
    <label for="fname">FirstName: </label>
      <input type="text" name="fname"  value="<?php
      echo $fname;?>"><br><br><br>
       <label for="lname">LastName:&nbsp; </label>      
      <input type="text" name="lname"  value="<?php
      echo $lname;?>"><br><br><br>
      <label for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
     <input type="email" name="email"  value="<?php echo $email; ?>"><br><br><br>
     <input type="submit" name="submit" class="submit" value="Save">  
    </form>
    <button class="cancel" onclick="popUp()">&times;</button>
  </div>
    </div>

    <div class="header">
      <img class="logo" src="logo.png" />
      <div class="nav">
        <ul>
          <div class="drop">
          <a onclick="dropItDown()"  id="Log"><?php echo "$fname"; ?></a>
            <div id="dropContent" class="dropContent">
              <a href="../single hotel/bookinginfo.php">My Bookings</a>
                <a onclick="popUp()">Account</a>
                <a href="logout.php">Logout</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
    <hr />

    <div class="firstsection">
      <h3 style="font-family: Arial, Helvetica, sans-serif">
        Select Your destiny among TOP 5 Ethiopian Hotels
      </h3>
      
     
    </div>
 <div class="map">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.519593037385!2d38.76319617038246!3d9.016274469421292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8597f3e6c4c5%3A0x64abf1244fb29407!2sRadisson%20Blu%20Hotel%2C%20Addis%20Ababa!5e0!3m2!1sen!2snl!4v1686046149174!5m2!1sen!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>
   

    <div class="wrapper">
       <form action="" method="POST">
          <button class="hot" name="Radisson" value="">
            <div class="hotel" id="h1">
        <img class="img01" src="../single hotel/hotel/RadissonBlu.jpg" alt="" />
        <section class="info">
          <div class="title">
            <h4>Radisson Blu Hotel</h4>
          </div>
          <div class="description">
          Radisson Blu Hotel in Addis Ababa is centrally located within Ethiopia's capital city—adjacent to the United Nations Compound. The hotel offers 212 elegantly designed rooms and suites with premium amenities such as individual climate control and free Wi-Fi. Savor French bistro fare from our on-site restaurant, Verres en Vers, or try a refreshing cocktail at the hotel's Signature Bar. Enjoy a hearty start to your day with our Super Breakfast Buffet, or take breakfast with you through our "Grab & Run" option.
          </div>
         
      </section>
      </div>
      </button>
        </form>
        <div class="extra">
        <!-- <div class="menu">
          <ul>
            <li onclick="makeVisible('photos')">Photos</li>
            <li onclick="makeVisible('info')">Info</li>
            <li class="close" id="close">X</li>
          </ul>
        </div> -->
        <div class="content">
          <div class="photos" id="photos">
            <!-- <img src="hotelword.webp" alt="" />
            <img src="pexels-ahmed-abdelaziz-453201.jpg" alt="" />
            <img src="pexels-tom-balabaud-1579739.jpg" alt="" /> -->
          </div>
          <div class="info" id="info">
           
          </div>
        </div>
      </div>
      <form action="" method="POST"><button  name="Sheraton" class="hot" value="Check-Rooms">
      <div class="hotel" id="h2">
      
        <img class="img02" src="../single hotel/hotel/Sheraton.webp" alt="" />
        <section class="info">
          <div class="title">
            <h4>Sheraton Addis Hotel</h4>
          </div>
          <div class="description">
            Sheraton Addis, a Luxury Collection Hotel is an excellent choice for
            travelers visiting Addis Ababa, offering a romantic environment
            alongside many helpful amenities designed to enhance your stay.
            Given the close proximity of popular landmarks, such as Tiglachin
            Memorial (0.5 mi) and Meyazia 27 Square Monument (0.9 mi), guests of
            Sheraton Addis, a Luxury Collection Hotel can easily experience some
            of Addis Ababa's most well known attractions. The rooms offer a flat
            screen TV and a minibar, and getting online is possible, as free
            internet access is available, allowing you to rest and refresh with
            ease. Sheraton Addis, a Luxury Collection Hotel features a concierge
            and room service. 
          </div>
          
</section>
      </div>
    </button>
        </form>
      <!-- <div class="extra">
        <div class="menu"></div>
        <div class="content">
          <div class="photos"></div>
          <div class="info"></div>
        </div>
      </div> -->
      <form action="" method="POST"><button class="hot" name="Skylight" >
      <div class="hotel" id="h3">
        <img class="img03" src="../single hotel/hotel/Ethiopian Skylight.jpg" alt="" />
        <section class="info">
          <div class="title">
            <h4>Ethiopian Skylight Hotel</h4>
          </div>
          <div class="description">
            A striking contemporary property with elegant design and outstanding
            facilities in a prime location just 5 minutes´ walk away from the
            Addis Ababa Bole International Airport, Ethiopian Skylight Hotel
            promises guests an unforgettable experience during their visit to
            Addis Ababa. The hotel is a convenient and aspirational
            accommodation option for business and leisure travellers, and people
            visiting this vibrant city. Be spoilt for choice with 1024
            comfortably modern rooms and suites with different room types. Check
            out the extra modern amenities of our suites. All rooms and suites
            offer a host of contemporary design features and essential comforts,
            including full Wi-Fi connectivity, that meet the needs of long- and
            short-stay guests at Ethiopian Skylight Hotel.
          </div></section>
      </div>
        </button>
        </form>

      <!-- <div class="extra">
        <div class="menu"></div>
        <div class="content">
          <div class="photos"></div>
          <div class="info"></div>
        </div>
      </div> -->
      <form action="" method="POST">
          <button class="hot" name="Hilton" value="Check-Rooms">
      <div class="hotel">
        <img class="img04" id="h4" src="../single hotel/hotel/Hilton.jpg" alt="" />
        <section class="info">
          <div class="title">
            <h4>Hilton International Hotel</h4>
          </div>
          <div class="description">
            Make your best journey to Addis Ababa with the promised standard of
            Hilton Clean Stay at Hilton Addis Ababa hotel. Blending traditional
            Ethiopian touches with contemporary style, the twelve storeys
            majestic building of the hotel is architecturally designed to mirror
            the famous Lalibela cross which is one of the most popular tourist
            attractions of Ethiopia and considered as the Eighth work of the
            world. The motif is recurrent throughout the hotel, from the design
            of the bedroom balconies to the cross-shaped outdoor swimming pool.
            This unique hotel in Ethiopia is set on 15 acres of lush foliage,
            surrounded by beautiful green oasis. Each of the elegant guest rooms
            and suites offers a balcony with scenic views overlooking the pool
            area, the gardens, mountains or the city skyline.
          </div>
          
        </section>
      </div>
      </button>
        </form>
      <form action="" method="POST">
          <button class="hot" name="Hyatt" value="Check-Rooms">
      <div class="hotel" id="h5">
        <img class="img05" src="../single hotel/hotel/Hyatt.webp" alt="" />
        <section class="info">
          <div class="title">
            <h4>Hyatt Regency Hotel</h4>
          </div>
          <div class="description">
            Hyatt Regency is located just 15 minutes from Bole international
            airport, and most centrally located on Meskel Square, connecting the
            large artery roads of Addis Ababa. The hotel stands within a short
            walking distance to the United Nations Conference center and within
            a 15 min. drive to the African Union Headquarters with the largest
            conference facilities in the country. The presidential palace,
            government and business offices are also within short reach of the
            hotel.
      </div>
  </section>
      </div>
</button>
</form>
    </div>
    <footer>
    <div class="footer">
      <h2>BOOKEASE</h2>
<h2>All Rights Reserved.</h2>
<h2>&copy;2023 bookease.com</h2>
    </div>
  </footer></body>
</html>

<script src="script.js"></script>
<!-- <script>
      document.getElementById('Log').textContent="loop";
    </script> -->
