<!DOCTYPE html>
<html>
<head>
  <title>Admin:Hotel Booking</title>
   <link rel="shortcut icon" type="image/png" href="favicon.png">
   <style type="text/css">
    *{
  margin: 0;
  padding: 0;
}
header{
  background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));
  height: 10vh;
  background-size: cover;
  background-position: center;
  font-family: Century Gothic;
}
ul{
  float: left;
  margin-left: 250px;
  list-style-type: none;
  margin-top: 150px;
  padding-right:130px;
}
ul li{
  display: inline-block;
}
ul li a{
  text-decoration: none;
  font-size: 50px;
  color: #000;
  padding: 5px 20px;
  border: 1px solid transparent;
  transition: 0.7s ease-out;
}
ul li a:hover{
  background-color: #000;
  color: #fff;
}
body
{
  background-color: #fff5cc;
  background-size: cover;
  background-repeat: no-repeat;
}
</style>
</head>
<body>
<header></header>
        <ul>

<li><a href="inserthotel.php">Insert a new Hotel</a></li>
<br><br>
<li><a href="viewhotel.php">View Hotels</a></li>
<br><br>
<li><a href="updatehotel.php">Update Hotel Details</a></li>
<br><br>
<li><a href="deletehotel.php">Delete Hotel</a></li>
<br><br>
<li><a href="insertroom.php">Insert Room Details for Hotel</a></li>
<br><br>
<li><a href="updateprice.php">Update Room Price for Hotel</a></li>
<br><br>
<li><a href="deleteroom.php">Delete Room</a></li>
<br><br>
<li><a href="allbookings.php">View Bookings</a></li>
<br><br>
<li><a href="payment.php">View Payments</a></li>
<br><br>
<li><a href="../Main Page/Login/Sign-in.php">Logout </a></li>

</ul>
</div>
</body>
</html>

