<?php
require_once("config.php");
$date = new DateTime();
$date->modify('+1 day');

if(isset($_GET['hotelno'])){
  $_SESSION['hoteltype']=$_GET['hotelno'];
  $sql="select *from roomtype where roomtypeid=".$_SESSION['hoteltype'];
  $result=$conn->query($sql);
  if($result->num_rows>0){
    $row=$result->fetch_assoc();
    $_SESSION['hotelname']=$row['hotel_name'];
  $_SESSION['backimg'] =$row['BackGround'];
  $_SESSION["desc"]=$row['Description'];
  $_SESSION['Address']=$row['Address'];
  $_SESSION['Email']=$row['Email'];
  $_SESSION['Phone']=$row['Phone'];
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Hotel Booking Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="materialize.min.css"> -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500;600;700;800;900&display=swap');
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
html,body {
  font-family: "Comic Sans MS", cursive, sans-serif;
  scroll-behavior: smooth;
}
li {list-style: none;}
a {text-decoration: none;}
.container {
  max-width: 80%;
  margin: auto;
}
.book .container{
    width: fit-content;
}
.head_container {
  max-width: 90%;
  margin: auto;
}

div.logo img {
  margin: 30px;
  height: 80px;
  width: 117px;
  grid-area: logo;
  border-radius:8%;
}
a.login{
background-color: #888584;
    grid-area: login;    
text-align: center;
padding-top: 3px;
color: #FFF;
transition: all 2s ease ;
font-size: 15px;
height: 30px;
width: 70px;
margin-top: 20px;
margin-left: 50%;
}
button.login:hover , nav.navs ul li a:hover
{
color: black;
font-size: 18px;
font-weight: 1000;
}
nav.navs{
    grid-area:nav;
}
nav.navs ul{
display: flex;
width: 80%;
height: fit-content;
text-align: center;
/* column-gap: 10%;
overflow-x: hidden; */
position: relative;
top: 50px;
margin: auto;
left: 20%;

}
nav.navs ul li a{
    text-decoration: none;
    color: black;
    font-size: 15px;
    transition: all 0.7s ease ;
    font-weight: bold;
}
section.header{
width: 100%;
height: 500px;
background-image: url("<?php echo "hotel/".$_SESSION['backimg'] ?>"); 
background-repeat: no-repeat;   
background-size: 100%;
display: grid;
grid-template-columns: 1fr 3fr 1fr;
grid-template-rows: 3fr 1fr;
grid-template-areas: 'logo . login'
'. nav .'
; 
}

section.Welcome:hover {
  -webkit-box-shadow: 11px 17px 22px 10px #000000; 
box-shadow: 11px 17px 22px 10px #000000;
}

section.Welcome {
  display: flex;
  width: 70%;
  position: relative;
  left: 15%;
  right: 15%;
  margin-bottom: 192px;
  box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0);  
  column-gap: 10%;
text-transform: uppercase;
transition: all .8s;

margin-bottom: 100px;
}
section.Welcome p{
  width: 50%;
}
.Welcome h2{
  position: relative;
  top: 45%;
}


@media(max-width:776px){
  section.Welcome p{
  width: 100%;
}
}
@media (max-width:694px){
  section.Welcome {
  display: block;
  width: 100%;
  position: relative;
  margin-bottom: 192px;
  box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0);  
  left: 0;
  right: 0;
text-transform: uppercase;
transition: all .8s;

margin-bottom: 100px;
}
section.Welcome p{
  width: 100%;
}
.Welcome h2{
  position: relative;

}

  .Welcome hr{
    display: none;
  }
}
.Welcome hr {
  width: 10px;
  /* transform: rotate(0deg); */
  background-color: #FAAC39;
  border: 0;
}
/* .dates{
 
} */
.dates input
{
  width: 100%;
  padding: 15px;
  border: 4px solid #000000;
  outline: none;
  background: #ffffff;
  /* margin-top: 20px; */
  color: #000000;
  font-weight:bold; 
/* border-radius: 10%; */
font-size: 20px;
}
@media (max-width:966px) {
  .dates input{
    font-size: 19px;
  }
}
@media (max-width:924px) {
  .dates input{
    font-size: 18px;
  }
}
@media (max-width:892px) {
  .dates input{
    font-size: 16px;
  }
}

@media (max-width:814px) {
  .dates input{
    font-size: 14px;
  }
}
@media (max-width:736px) {
  .dates input{
    font-size: 12px;
  }
}
@media (max-width:672px) {
  .dates input{
    font-size: 10px;
  }
}
@media (max-width:450px) {
  .dates input{
    font-size: 8px;
  }
}


.dates .field:nth-child(1) input{
  border-top-left-radius: 8%;
  border-bottom-left-radius: 8%;
}
.dates .field:nth-child(2) input{
  border-top-right-radius: 8%;
  border-bottom-right-radius: 8%;
}
div.book{
width: 40%;
margin:auto;
margin-top: 5%;
padding-bottom: 20%;
display: flex;
flex-direction: column;
/* height: 30%; */
/* position: sticky;
    top: 0px; */
  /* z-index: 10; */
}

div.dates{
    width: 100%;
    display:flex ;
    
    flex-grow: 2;
    /* column-gap: 3px; */
}
div.field{
  /* background-color: #3f9cc1; */
    width: 50%;
}
div.search{
    flex-grow: 1;
    
}
div.search input
{
background-color: #FAAC39;
height: 57px;
margin-left: 31%;
margin-right: 31%;
font-size: 20px;
color: #FFFFFF;
border: #222222;
cursor: pointer;
border-radius: 15%;
transition: all .5s;
}
.search input:hover{
  border-radius: 0%;
}
.heading {
text-align: center;
}
/* .Welcome p{
position: relative;
left: 10%;
right: 10%;
width: 80%;
margin-bottom: 100px;    
} */

footer .footer
{
  text-align: center;
  text-transform: uppercase;

}
footer span{
  font-weight: 600;
}

button.booknow{
height: 35px;
background-color: #faac39;
width: 75px;
box-shadow: 0 13px 43px 0 rgb(37 46 89/10%);
font-weight: 600;
color: #fdf1e5;   
 border: 0px;
 border-radius: 8%;
 cursor: pointer;
}



.box div.img{
  position: relative;
}
.box div.img span{
  position: absolute;
  left: 0;

  opacity: 0;
  background-color: black;
  transition: all .8s  ;
  color: white;
  text-align: center;
  height:100%;
  width: 100%;
  /* vertical-align: 50%; */
}
.box div.img:hover span{
top: 0;
opacity: 0.7;
}
.flex {display: flex;}
.grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 30px;
}
.book {
  margin-top: 5%;
  width: 100%;
  height: 20vh;
  color: white;
}
.book .input {
  background: lightslategrey;/*#349481*/
  padding: 20px 20px 40px 20px;
}






.flex1 {
  display: flex;
  justify-content: space-between;
}
.room .grid {grid-template-columns: repeat(3, 1fr);}
.room img {
  width: 100%;
  height: 100%;
}
.room .box {-webkit-box-shadow: 0px 3px 22px -3px #000000; 
box-shadow: 0px 3px 22px -3px #000000;}
.room .text {padding: 20px;}
.room h3 {
  font-weight: 400;
  margin-bottom: 10px;
}
.room p span {
  font-size: 12px;
  color: grey;
}
.room p {font-size: 20px;}

footer{background-color: #888584;}
footer h3 {margin-bottom: 20px;}
footer li {
  padding-bottom: 15px;
  transition: 0.5s;
}
@media only screen and (max-width:768px) {
  header ul {
    display: block;
    position: fixed;
    left: -100%;
    top: 5rem;
    flex-direction: column;
    background-color: #fff;
    width: 100%;
    border-radius: 10px;
    text-align: center;
    transition: 0.5s;
    box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
    z-index: 20;
  }
  header ul.active {left: 0%;}
  header ul li {margin: 2.5rem 0;}
  header ul li a {color: black;}
  .navpanel {
    display: block;
    cursor: pointer;
  }
  .navpanel.active .bar:nth-child(2) {opacity: 0;}
  .navpanel.active .bar:nth-child(1) {transform: translateY(8px) rotate(45deg);}
  .navpanel.active .bar:nth-child(3) {transform: translateY(-8px) rotate(-45deg);}
  .book .container{flex-direction: column;}
  
  .grid {grid-template-columns: repeat(2, 1fr);}
 .book {
    margin-top: 10%;
    height: auto;
  }
  .book .search {width: 100%;}
  .book .search input {margin-top: 0;}
  .left, .right {width: 100%;}
  .room {margin-bottom: 100px;}
  .room .grid {grid-template-columns: repeat(1, 1fr);}
  footer .payment {grid-template-columns: repeat(4, 1fr);}
  .grid {grid-template-columns: repeat(1, 1fr);}


}
@media(max-width:1276px)
{
  div.search input
{

height: 57px;
margin-left: 30%;
margin-right: 29%;
font-size: 20px;

}
}
@media(max-width:1195px)
{
  div.search input
{

height: 57px;
margin-left: 29%;
margin-right: 29%;
font-size: 20px;

}
}
@media(max-width:1091px)
{
  div.search input
{

height: 57px;
margin-left: 28%;
margin-right: 29%;
font-size: 20px;

}
}
@media(max-width:1009px)
{
  div.search input
{

height: 57px;
margin-left: 26%;
margin-right: 29%;
font-size: 20px;

}
}
@media(max-width:1009px)
{
  div.search input
{

height: 57px;
margin-left: 24%;
margin-right: 29%;
font-size: 20px;

}
}
@media(max-width:861px)
{
  div.search input
{

height: 57px;
margin-left: 21%;
margin-right: 29%;
font-size: 20px;

}
a.login{
  margin-left: 30%;
}
}
@media(max-width:759px)
{
  div.search input
{

height: 57px;
margin-left: 17%;
margin-right: 29%;
font-size: 20px;

}}
@media(max-width:649px)
{
  div.search input
{

height: 57px;
margin-left: 14%;
margin-right: 29%;
font-size: 20px;

}
a.login{
  margin-left: 17%;
}
}
@media(max-width:611px)
{
  div.search input
{

height: 57px;
margin-left: 11%;
margin-right: 29%;
font-size: 20px;

}}
@media(max-width:588px){
  a.login
  {
    margin-left: 0%;
  }
}
@media(max-width:563px)
{
  div.search input
{

height: 57px;
margin-left: 7%;
margin-right: 29%;
font-size: 20px;

}
/* div.dates{
    width: 194px;
} */
}
@media(max-width:517px)
{
  div.search input
{

height: 57px;
margin-left: 2%;
margin-right: 29%;
font-size: 20px;



}
a.login{
  margin-left: 12px;
}
}
@media(max-width:507px)
{
  div.search input
{ 

height: 57px;
width: 150px;
margin-left: 2%;
margin-right: 29%;
font-size: 14px;



}
}
@media(max-width:507px)
{
  div.search input
{ 

height: 57px;
width: 150px;
margin-left: 15%;
margin-right: 29%;
font-size: 14px;



}
}
@media (max-width: 481px){
div.search input {
  
  height: 39px;
  width: 114px;
  margin-left: 21%;
  margin-right: 29%;
  font-size: 11px;
  color: #fff;
  border: #222222;
}}
@media(max-width:452px){
  a.login{
    margin-left: 0px;
  }
  div.logo img{
    width: 86px;
  }
}
@media(max-width:436px){
  a.login{
    margin-left: -21px;
  }
}
@media(max-width:452px){
  a.login{
    margin-left: -45px;
  }
}
@media(max-width:396px){
  a.login{
    margin-left: -58px;
  }
}
@media(max-width:380px){
  a.login{
    margin-left: -74px;
  }
}
@media(max-width:368px){
  a.login{
    margin-left: -54px;
  }
}
@media(max-width:326px){
  a.login{
    margin-left: -64px;
  }
}
@media(max-width:312px){
  a.login{
    margin-left: -70px;
  }
}
@media(max-width:264px){
  a.login{
    margin-left: -120px;
  }
}
@media (max-width: 430px){
  div.book {
  width: 172px;
  margin: auto;
  margin-top: 5%;
  padding-bottom: 20%;
  display: flex;
  flex-direction: column;
  
}}


</style>

<style>
  li {list-style: none;}
a {text-decoration: none;}
.container {
  max-width: 80%;
  margin: auto;
}
.head_container {
  max-width: 90%;
  margin: auto;
}
header {height: 8vh;}
header nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 20px;
}
.navpanel{display:none;}
.bar {
  display: block;
  width: 25px;
  height: 3px;
  margin: 5px auto;
  transition: all 0.3s ease-in-out;
  background-color: #fff;
}
header ul {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
header ul li {margin-left: 3rem;}
header ul li a {
  font-size: 1.2rem;
  font-weight: 400;
  color: white;
  transition: 0.5s;
}
header ul li a:hover {color: #3eaee3;}

@media only screen and (max-width:768px) {
  header ul {
    display: block;
    position: fixed;
    left: -100%;
    top: 5rem;
    flex-direction: column;
    background-color: #fff;
    width: 100%;
    border-radius: 10px;
    text-align: center;
    transition: 0.5s;
    box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
    z-index: 20;
  }
  header ul.active {left: 0%;}
  header ul li {margin: 2.5rem 0;}
  header ul li a {color: black;}
  .navpanel {
    display: block;
    cursor: pointer;
  }
  .navpanel.active .bar:nth-child(2) {opacity: 0;}
  .navpanel.active .bar:nth-child(1) {transform: translateY(8px) rotate(45deg);}
  .navpanel.active .bar:nth-child(3) {transform: translateY(-8px) rotate(-45deg);}
}












.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: visible;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  transition: all .2s ease-out;
opacity: 1;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.3);
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
  box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}





</style>
</head>
<body>
  

<div class="loading">Loading&#8230;</div>


<section class="header">

    <div class="logo" ><img onclick="window.location='../Main Page/index.php';" style="cursor:pointer;" src="../Main Page/logo.png" alt="Logo of the site"> </div>
<!--  -->
<header class="header" id="navigation-menu">
    <div class="container">
      <nav>
        <a href="#" class="logo"> <img src="" alt=""> </a>
        <ul class="nav-menu">
          <li> <a href="../Main Page/index.php" class="nav-link">Home</a> </li>
          <li> <a href="#rooms" class="nav-link">Rooms</a> </li>
          <li> <a href="#footer" class="nav-link">Contact</a></li>         
          <li> <a href="singleHotelBooking.php" class="nav-link">Booking</a></li>
          <li> <a href="accountinfo.php" class="nav-link">Account</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
         <div class="navpanel">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>
  </header>
    
    
    
<!--  -->
    <!-- <a class="login" href="../Main Page/Log/sign-in.php">Login</a>     -->


    
</section>
 
  <?php
  if(!isset($_POST['submit'])){
    ?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
      <div class="book">
        <div class="dates">
          <div class="field">
          <!-- <label>Check-in:</label> -->
          <input onchange="newDate()" type="text" onfocus="this.type='date'" onblur="this.type='text'"  min="<?php echo date('Y-m-d'); ?>" id="date1" name='date1' placeholder="Check-in-Date" required>
        </div> 
        <div class="field">
          <!-- <label>Check-out:</label> -->
          <input type="text"  id="date2" name="date2" onfocus="this.type='date'" onblur="this.type='text'"  placeholder="Check-out-Date" required>
        </div>       
    </div>       
      <div class="search">
        <input type="submit" name="submit" value='Check Availiable Rooms' class="button">
      </div>
    </div>
</form>
<?php } ?> 
  <section class="Welcome" >
        <div class="heading">
          <h2>Welcome to <?php echo $_SESSION['hotelname']; ?> </h2>
         </div>
         <hr>
          <p><?php echo $_SESSION['desc']; ?></p>
  </section>
  <section class="room top" id="rooms">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>RAISING COMFORT TO THE HIGHEST LEVEL</h5>
          <h2>Rooms</h2>
        </div>
      </div>
      <div class="content grid">
      <?php
if(isset($_POST['submit'])){
$_SESSION['checkin']=$_POST['date1'];
$_SESSION['checkout']=$_POST['date2'];
// $persons=$_POST['person'];
  $sql="select *from `tblroom` where roomstatus='unreserved' and  roomtypeid=".$_SESSION['hoteltype'];
  $result=$conn->query($sql);
if($result->num_rows>0)
  while($row=$result->fetch_assoc())
{

?>
        <div class="box">
          <div class="img">
            <img src="<?php
       
              echo "rooms/".$row["roomimage"] ?>" alt="">
          </div>
          <div class="text">
            <h3><?php echo $row['roomname'] ?></h3>
            <p> <span>$</span><?php echo $row['roomprice'] ?><span>/per night</span> </p>
            <form action="bookaroom.php?id=<?php echo $row['roomid'];?>" method="post">
            <button class="booknow" name="submit" type="submit" >BOOK NOW</button>
            </form>
          </div>
        </div>
        <?php }
       else{
        ?>
        <div class="box">
          <div class="img">
            <img src="image/noroom.jpg" alt="">
          </div>
          <div class="text">
            <h3  style="color:red;">Sorry!All our rooms are booked.</h3>
          </div>
        </div>
        <?php
       }
        }
   else{    
    $sql="select *from `tblroom` where roomtypeid=".$_SESSION['hoteltype'];
  $result=$conn->query($sql);
if($result->num_rows>0)
  while($row=$result->fetch_assoc())
{   
 ?>
<div class="box">
          <div class="img">
            <img src="<?php
       
       echo "rooms/".$row["roomimage"] ?>" alt="">
<span><?php echo $row['roomdescription'] ?></span>
          </div>
          <div class="text">
            <h3><?php echo $row['roomname'] ?></h3>
            <p> <span>$</span><?php echo $row['roomprice'] ?><span>/per night</span> </p>
            <!-- <form action="./bookaroom.php" method="post"><button class="booknow" name="submit" type="submit" >BOOK NOW</button> 
            </form> -->
          </div>
        </div> 

<?php
}}

?>
</div>
    </div>
  </section>
  <footer>
    <div class="footer" id="footer">
        <h3>Contact Us</h3>
        <ul>
          <li><span>Address&nbsp;&hyphen;&nbsp;&nbsp;</span><?php echo $_SESSION['Address']; ?></li>
          <li><i style="font-weight:900;"></i><?php echo $_SESSION['Email']; ?> </li>
          <li><i>&phone;&nbsp;&nbsp;&hyphen;&nbsp;</i><?php echo $_SESSION['Phone']; ?></li>
                </ul>     
    </div>
  </footer>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
</body>

</html>
<script defer src="script.js"></script>
