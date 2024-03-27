<?php
require_once('config.php'); 
$cookie_name='id';
// $fname="Login";
// //account info
if(isset($_SESSION['id'])){
  // echo "<script>document.getElementById('Log').textContent=".$_SESSION['id']</script>";
// $sql='select *from tbluser where userid='.$_SESSION['id'];
// $result=$conn->query($sql);
// if($result->num_rows==1){
// $row=$result->fetch_assoc();
// $fname=$row['fname'];  
// $email=$row['email'];
// $lname=$row['lname'];

// echo "<script>alert('".$fname."');</script>";
// echo "<script>document.getElementById('Log').textContent='".$fname."';</script>";
}
//account update
// if(isset($_POST['submit'])){
//   $fname=$_POST['fname'];
//   $email=$_POST['email'];
//   $sql="update `tbluser` set `fname`='".$fname."',`email`='".$email."',`lname`='".$lname."' where userid=".$_SESSION['id']; 
//   $result=$conn->query($sql);
//   echo "<script>alert('Successfully Updated');</script>";
// }
// }
if(isset($_POST['Radisson']))
{
  // echo "<script>alert('".$_COOKIE."')</script>";
  // echo "<script>alert('27')</script>";
  if(!isset($_SESSION['id']))
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style (2).css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 
  <title>Main Page</title>
</head>

<body>
  <!-- Header -->
  <!-- acc -->
  <!-- <div class="popup" id="pop">
    <div class="overlay"></div>
    <div class="content">
    <form action="" method="post">
      <br>
      <div class="accTitle">Account Info </div><br><br>
    <label for="fname">FirstName: </label>
      <input type="text" name="fname"  value=""><br><br><br>
       <label for="lname">LastName:&nbsp; </label>      
      <input type="text" name="lname"  value=""><br><br><br>
      <label for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
     <input type="email" name="email"  value=""><br><br><br>
     <input type="submit" name="submit" class="submit" value="Save">  
    </form>
    <button class="cancel" onclick="popUp()">&times;</button>
  </div>
    </div>
 -->
  <!-- acc -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
          <img class="logo" src="logo.png" />
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#map" data-after="Map">Map</a></li>
            <li><a href="#projects" data-after="Projects">Hotels</a></li>
            <li><a href="../single hotel/bookinginfo.php" data-after="Service">My Bookings</a></li>
            <li><a href="#review" data-after="About">Review</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
        
      </div>
      <!-- <div class="nav">
        <ul>
          <div class="drop">
          <a onclick="dropItDown()"  id="Log"></a>
            <div id="dropContent" class="dropContent">
                <a onclick="popUp()">Account</a>
                <a href="logout.php">Logout</a>
            </div>
          </div>
        </ul>
      </div> -->
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero-container">
      <div>
        <h3>Your journey starts with us...</h3>
        <p>Discover Addis Ababa's 5 hotels with us...Book with ease, travel with confidence.</p>
        <a href="#projects" type="button" class="cta">Discover hotels</a>
      </div>
   
    <div class="controls">
      <span class="vid-btn active" data-src="./Vid/v5.mp4"></span>
      <span class="vid-btn" data-src="./Vid/v7.mp4"></span>
      <span class="vid-btn" data-src="./Vid/v4.mp4"></span>
      <span class="vid-btn" data-src="./Vid/v1.mp4"></span>
      <span class="vid-btn" data-src="./Vid/v3.mp4"></span>
      <span class="vid-btn" data-src="./Vid/v6.mp4"></span>
      <span class="vid-btn" data-src="./Vid/v3.mp4"></span>
   
    </div>
    <div class="video-container">
      <video src="./Vid/v5.mp4" id="video-slider" autoplay loop muted></video>

    </div>
    </div>
  </section>
  <!-- End Hero Section  -->
  <section class="map" id="map">
    <h1 class="heading">
      <span>m</span>
      <span>a</span>
      <span>p</span> 
    </h1>
    <div class="map">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.519593037385!2d38.76319617038246!3d9.016274469421292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8597f3e6c4c5%3A0x64abf1244fb29407!2sRadisson%20Blu%20Hotel%2C%20Addis%20Ababa!5e0!3m2!1sen!2snl!4v1686046149174!5m2!1sen!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>
   

  </section>

  <!-- Projects Section -->
 

<section class="projects" id="projects">
  <h1 class="heading">
    <span>h</span>
    <span>o</span>
    <span>t</span>
    <span>e</span>
    <span>l</span>
    <span>s</span>
    
    
  </h1>
  <div class="box-container">
    <div class="box">
      <img src="./img/radisson2.jpg" alt="">
      <div class="content">
        <h3><i class="fas fa-map-marker-alt"></i>Radisson Blu</h3>
        <p>Radisson Blu Hotel in Addis Ababa is centrally located within Ethiopia's capital city—adjacent to the United Nations Compound.</p>       <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div> 
          <form action="" method="POST"><button class="fee" name="Radisson" value="Check-Rooms">Check-Rooms</button>
          </form>  
      </div>
    </div>


    <div class="box">
      <img src="./img/sheraton.jpg" alt="">
      <div class="content">
        <h3><i class="fas fa-map-marker-alt"></i>Sheraton Addis</h3>
        <p> Sheraton Addis, a Luxury Collection Hotel is an excellent choice for
          travelers visiting Addis Ababa, offering a romantic environment
          alongside many helpful amenities designed to enhance your stay.</p> 
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>  
          <form action="" method="POST"><button class="fee" name="Sheraton" value="Check-Rooms">Check-Rooms</button>   
      </div>
    </div>


    <div class="box">
      <img src="./img/skylight.jpg" alt="">
      <div class="content">
        <h3><i class="fas fa-map-marker-alt"></i>Ethiopia Skylight</h3>
        <p> A striking contemporary property with elegant design and outstanding
          facilities in a prime location just 5 minutes´ walk away from the
          Addis Ababa Bole International Airport, Ethiopian Skylight Hotel
          promises guests an unforgettable experience during their visit to
          Addis Ababa.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>  
          <form action="" method="POST">       
            <button class="fee" name="Skylight" value="Check-Rooms">Check-Rooms</button>
     </form>     
      </div>
    </div>


    <div class="box">
      <img src="./img/hilton.jpg" alt="">
      <div class="content">
        <h3><i class="fas fa-map-marker-alt"></i>Hilton</h3>
        <p>Make your best journey to Addis Ababa with the promised standard of
          Hilton Clean Stay at Hilton Addis Ababa hotel.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div> 
          <form action="" method="POST">
            <button class="fee" name="Hilton" value="Check-Rooms">Check-Rooms</button></form>    
      </div>
    </div>


    <div class="box">
      <img src="./img/hyatt.jpg" alt="">
      <div class="content">
        <h3><i class="fas fa-map-marker-alt"></i>Hyatt Regency</h3>
        <p> Hyatt Regency is located just 15 minutes from Bole international
          airport, and most centrally located on Meskel Square, connecting the
          large artery roads of Addis Ababa. </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>  
          <form action="" method="POST">
            <button class="fee" name="Hyatt" value="Check-Rooms">Check-Rooms</button></form>
            
      </div>
    </div>


  </div>
</section>
  
    
  <!-- End Projects Section -->

  <!-- Service Section -->
   <section id="services">
   <h1 class="heading">
      <span>S</span>
      <span>e</span>
      <span>r</span>
      <span>v</span>
      <span>i</span>
      <span>c</span>
      <span>e</span>
      <span>s</span>
    </h1>
    <div class="box-container">
      <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
       <p>Comfortable accommodations and basic amenities at a reasonable price. .</p> 
      
      </div>
      <div class="box">
        <i class="fa fa-clock-o"></i>
        <h3>Time Saving</h3>
        <p>our site allows users to quickly and easily book various luxury rooms in Ethiopia without the need for extensive research or phone calls. Overall our  booking site is a convenient and efficient way to plan and book rooms in Addis.</p> 
      </div>
      <div class="box">
        <i class="fas fa-bullhorn"></i>
        <h3>All in one</h3>
        <p>Compare and Book Among Top 5 Ethiopian luxury hotels all in this site.Manage your bookings easily in international Ethiopian hotels in one place.</p> 
      </div>
      <div class="box">
        <i class="fas fa-globe-asia"></i>
        <h3>around the world</h3>
        <p>Book Ease has locations in different countries or regions across the globe.</p> 
      </div>
      <div class="box">
        <i class="fas fa-plane"></i>
        <h3>Fastest booking place</h3>
        <p> A fast and convenient way to search for and book hotels, making it easy for travelers to find accommodations that meet their needs and preferences. </p> 
      </div>
    </div>
    
    
  </section>
  <!-- End Service Section -->

  <!-- About Section -->
  <!-- <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/img-2.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Front End Developer</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque
          repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt
          exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni!
          Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt
          reprehenderit libero enim!</p>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section> -->
  <!-- End About Section -->

  <!-- Review secttion -->
  <section class="review" id="review">
  <h1 class="heading">
    <span>r</span>
    <span>e</span>
    <span>v</span>
    <span>i</span>
    <span>e</span>
    <span>w</span>
    
    
  </h1>
 
  <div class="swiper mySwiper review-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p1.jpg" alt="">
          <h1>Sara Tomas </h1>
<p>"I've used this hotel booking site multiple times and it's always been a breeze to use. The interface is user-friendly and the search options are extensive."</p>
          <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p5.jpg" alt="">
          <h1>Linda Deo</h1>
          <p>I was able to find the perfect hotel for my trip on this website. The prices were competitive and the reviews from other travelers were very helpful.</p>  <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p6.jpg" alt="">
          <h1>Sandra Oh</h1>
          <p>This website made it easy to compare hotel prices across different dates and locations. I was able to find a great deal on a highly-rated hotel.
            </p>
            <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p2.jpg" alt="">
          <h1>Olivia Noah</h1>
          <p>I've had great experiences with this hotel booking site. The customer service is excellent and they always go above and beyond to help me find the right hotel.  
            </p>
             <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p3.jpg" alt="">
          <h1>Marry Deo</h1>
          <p>I've used this site to book hotels all over the world and have never had any issues. The prices are fair and the booking process is simple.</p>
             <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p8.jpg" alt="">
          <h1>Danait Ts.</h1>
          <p>This hotel booking website is my go-to for all of my travel needs. The site is easy to use and the selection of hotels is impressive.</p>
          <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p10.jpg" alt="">
          <h1>John H.</h1>
          <p>I appreciate the transparency of this hotel booking site. The prices are upfront and there are no hidden fees or surprises when I arrive at the hotel.</p>
          <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p12.jpg" alt="">
          <h1>Maki Tedros</h1>
          <p>I've recommended this website to all of my friends and family. They have a wide selection of hotels and the prices are always competitive.</p>
           <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p9.jpg" alt="">
          <h1>Tom Deo</h1>
          <p>I was able to find a great hotel deal on this website. The booking process was easy and the hotel exceeded my expectations.</p>
             <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p3.jpg" alt="">
          <h1>Tom Deo</h1>
          <p>I've used other hotel booking sites in the past, but this one is by far the best. The prices are fair and the selection of hotels is extensive.</p>
          <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p5.jpg" alt="">
          <h1>Selena B.</h1>
          <p>I highly recommend this hotel booking site. The prices are fair and the booking process is easy.</p>
          <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p10.jpg" alt="">
          <h1>Adam R.</h1>
          <p>I was hesitant to book a hotel online, but this site made the process easy and stress-free. I will definitely use them again in the future.</p>
          <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p11.jpg" alt="">
          <h1>Sam D</h1>
          <p>I was able to find a last-minute hotel deal on this website. The prices were lower than other sites and the hotel was great.</p>
          <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p4.jpg" alt="">
          <h1>Robert A.</h1>
          <p>I appreciate the variety of payment options on this hotel booking site. I was able to use my preferred method of payment without any issues.</p>
          <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="box">
          <img src="./img/p2.jpg" alt="">
          <h1>Lora D</h1>
          <p>The customer reviews on this hotel booking site were very helpful. I was able to make an informed decision about my hotel based on the experiences of other travelers.</p>
          <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
       </div>
        </div>
      </div>
    </div>
  </div>





</section>
  <!-- Contact Section -->
  <section id="contact">
    <h1 class="heading">
      <span>c</span>
      <span>o</span>
      <span>n</span>
      <span>t</span>
      <span>a</span>
      <span>c</span>
      <span>t</span>

    </h1>
    
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+251 923456778</h2>
          
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>hotelbooking@gmail.com</h2>
            
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Ethiopia, Addis Ababa</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section class="footer" id="footer">
    <div class="box-container">
      <div class="box">
        <h3>about us</h3>
        <p>Welcome to our hotel booking site, where we make it easy for you to find the perfect accommodations for your next trip. Our mission is to provide a seamless booking experience, with a wide range of options at competitive prices.</p>
  
        </div>
  
        <div class="box">
          <h3>branch location</h3>
          <a href="#">Addis Ababa</a>
          <a href="#">Hawassa</a>
          <a href="#">Bahir dar</a>
          <a href="#">mekele</a>
         </div>

         <div class="box">
          <h3>quick links</h3>
          <a href="#">Home</a>
          <a href="#">Hotels</a>
          <a href="#">services</a>
          <a href="#">Review</a>
        </div>
        <div class="box">
         <h3>follow us</h3>
         <!--
         <a href="#">facebok</a>
         <a href="#">instagram</a>
         <a href="#">twitter</a>
         <a href="#">linkedin</a> -->
         <a href=""><i class="fa-brands fa-facebook"></i></a>
         <a href=""><i class="fa-brands fa-twitter"></i></a>
         <a href=""><i class="fa-brands fa-instagram"></i></a>
         <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
      
    </div>
    <div class="par">
      <p>Book Ease.Copyright © 2023 . All rights reserved</p>
    </div>
    
  </section>
  <!-- End Footer -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="app.js"></script>
</body>

</html>