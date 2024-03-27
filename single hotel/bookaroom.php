<?php 
require_once('config.php');
if(isset($_POST['submit'])){  
$_SESSION['roomid']=$_REQUEST['id'];
$sql="select * from `tblroom` where roomid=".$_SESSION['roomid'];
$result=$conn->query($sql);
if($result->num_rows>0){
$row=$result->fetch_assoc();
$roomname=$row["roomname"];
$price=$row["roomprice"];
$datediff=strtotime($_SESSION['checkout'])-strtotime($_SESSION['checkin']);//strtotime in milliseconds since 1970
$datediff/=86400;
$_SESSION['totalprice']=$datediff*$price;
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Hotel Book a room Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
/*  */
table{
background-color: #494d5f;
  margin: auto;
  height: 600px;
  width: 40%;
  
}
.title{
  height: 70px;
}
h1{
  display: block;
  width: 100%;
  background-color: #0049B7; 
  font-size: 30px;
  height: auto;
  padding: 0;
  margin: 0;
}
th,td{
  font-size: 24px;
  color: #000000;
  width: 50%;
  text-align: center;
}



/*  */
.buttons {
  display: flex;
  width: 380px;
  gap: 10px;
  --b: 5px;   /* the border thickness */
  --h: 1.8em; /* the height */
}

.buttons button,a {
  --_c: #88C100;
  flex: calc(1.25 + var(--_s,0));
  min-width: 0;
  font-size: 30px;
  font-weight: bold;
  height: var(--h);
  cursor: pointer;
  color: var(--_c);
  border: var(--b) solid var(--_c);
  background: 
    conic-gradient(at calc(100% - 1.3*var(--b)) 0,var(--_c) 209deg, #0000 211deg) 
    border-box;
  clip-path: polygon(0 0,100% 0,calc(100% - 0.577*var(--h)) 100%,0 100%);
  padding: 0 calc(0.288*var(--h)) 0 0;
  margin: 0 calc(-0.288*var(--h)) 0 0;
  box-sizing: border-box;
  transition: flex .4s;
}
.buttons button + a {
  --_c: #FF003C;
  flex: calc(.75 + var(--_s,0));
  background: 
    conic-gradient(from -90deg at calc(1.3*var(--b)) 100%,var(--_c) 119deg, #0000 121deg) 
    border-box;
  clip-path: polygon(calc(0.577*var(--h)) 0,100% 0,100% 100%,0 100%);
  margin: 0 0 0 calc(-0.288*var(--h));
  padding: 0 0 0 calc(0.288*var(--h));
}
.buttons button:focus-visible {
  outline-offset: calc(-2*var(--b));
  outline: calc(var(--b)/2) solid #000;
  background: none;
  clip-path: none;
  margin: 0;
  padding: 0;
}
.buttons button:focus-visible + a {
  background: none;
  clip-path: none;
  margin: 0;
  padding: 0;
}
.buttons button:has(+ button:focus-visible) {
  background: none;
  clip-path: none;
  margin: 0;
  padding: 0;
}
button:hover,
a:hover,
button:active:not(:focus-visible) {
  --_s: .75;
}
button:active,a:active {
  box-shadow: inset 0 0 0 100vmax var(--_c);
  color: #fff;
}

body {
  background-image: url("image/g6.jpg"); 
  display: grid;
  place-content: center;
  margin: 0;
  height: 100vh;
  font-family: system-ui, sans-serif;
}
</style>


</head>
<body>
<header class="header" id="navigation-menu">
    <div class="container">
      <nav>
        <a href="#" class="logo"> <img src="" alt=""> </a>
        

      </nav>
    </div>
  </header>
   
     </div> 
     <form method="post" action="https://api.chapa.co/v1/hosted/pay">
   
         <table class="table" id="table">
             <tr class="title"><td colspan="2"><h1>Your Booking Cart <i class="fa fa-shopping-cart"></i></h1></td> </tr>
              <tr>
              <th align="center" >Room</th>
             <td><?php echo $roomname;?> </td>
</tr>
<tr>
              <th align="center" width="120">Check In</th>
              <td><?php echo $_SESSION['checkin'];?> </td>
</tr>
<tr>
              <th align="center" width="120">Check Out</th>
              <td><?php echo $_SESSION['checkout'] ;?> </td>
             </tr>
             <tr>
              <th width="120">Price per Night</th><td><?php echo $price;?> </td>  
              </tr>
              <tr>
              <th align="center">Total Amount</th><td>$<?php echo $_SESSION['totalprice'];?></td>
</tr>
<tr>
            <!-- <td colspan="2" > 
            <button type="submit" class="confirm">
               Confirm Booking
            </button>
              <a href=""></a>
            <a href="body1.php" class="cancel">
                Cancel Booking          
            </a>
            </td>          
                  -->
            <td colspan="2" > 
        <div class="buttons">
                <button type="submit" ><u>Confirm</u></button>
                <a href="body1.php" >Cancel</a>
  </td>



                </tr>
                <tr>
                  <td>
  <input type="hidden" name="public_key" value="CHAPUBK_TEST-VMNI4GAfuMySr3uPNejxachgt6nf1eEw" />
  <input type="hidden" name="tx_ref" value="negade-tx-974107798ooqw9" />
  <input type="hidden" name="amount" value="<?php echo $_SESSION['totalprice'];?>" />
  <input type="hidden" name="currency" value="USD" />
  <input type="hidden" name="email" value="Da@gmail.com"/>
  <input type="hidden" name="first_name" value="Israel" />
  <input type="hidden" name="last_name" value="Goytom" />
  <input type="hidden" name="title" value="Let us do this" />
  <input type="hidden" name="description" value="Paying with Confidence with cha" />
  <input type="hidden" name="logo" value="https://chapa.link/asset/images/chapa_swirl.svg" />
  <input type="hidden" name="callback_url" value="https://example.com/callbackurl" />
  <input type="hidden" name="return_url" value="http://localhost:80/single%20hotel%20(6)/single%20hotel/book.php"/>
  <input type="hidden" name="meta[title]" value="test"/>
                  </td>
                 </tr>
          
        </table> 
        </form>
<footer>  </footer>
</body>
<script src="./script.js"></script>
</html>