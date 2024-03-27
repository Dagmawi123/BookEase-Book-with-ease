<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href='booking.css'>
</head>
<body> 
    <div class="hotel"></div>
    <div class="customerInfo">
   <label for="fname">First Name</label><span>*<?php echo $fname_err;?></span>
   <br><br><!--  -->
   <input type="text" name="fname" id="fname">  
   <br><br>
   <label for="lname">Last Name</label><span>*<?php echo $lname_err;?></span>
   <br><br>
   <input type="text" name="lname" id="lname">
   <br><br>
   <label for="email">E-mail</label><span>*<?php echo $email;?></span>
   <br><br>
   <input type="email" name="email" id="email">  
   <br><br>
   <label for="phone">Phone Number</label><span>*<?php echo $phone_err;></span>
   <br><br>
   <input type="phone" value='+251-' pattern="[+][0-9]{3}-[0-9]{9}" name="phone" id="phone"> 
   <br><br>
   <input type="checkbox" onclick='display()' name='bookforother' id='bookforother' value='make this booking for some body else'>
   <label class='bookforother' for="bookforother">Make this booking for someone else</label>
   <div class="guest">
    <label  for="fullName">Full Name</label>
  <input class='fullname' type="text" id='fullName' name='fullName'>
   <br><br><br><br>
   <label for="country">Country of Residence</label> 
   <br> 
   <select name="country" id="country">
   <option value="Ethiopia">Ethiopia</option>
   <option value="Kenya">Kenya</option>
   </select>  
</div>
</body>
</html>
<script src='booking.js'></script>