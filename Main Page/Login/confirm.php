<?php
session_start();
$number="";
$numbererr="";
if(isset($_POST['submit'])){
$number="";
$numbererr="";
if($_SESSION['randomnumber']==$_POST['confirm']){
    echo"<script>alert('Correct Verification!')</script>";
echo "<script>window.location='../index.php'</script>";
}
else{
echo"<script>alert('InCorrect Verification!')</script>";
$numbererr="InCorrect Verification!";
$number=$_POST['confirm'];

}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="new.css">
    <script src="script.js" defer></script>
</head>
<body>
    
    <form class="form" method="post" action="">
        <p class="form-title">Two-Step Verification</p>
         <div class="input-container">
           <input type="text" id="email" value="<?php echo $number?>"  name="confirm" placeholder="Enter Verification Code"><br>
           <span style="color:red;" class="error"><?php echo $numbererr ?></span>
       </div>
       <!-- <div class="input-container">
           <input type="password" name="password"  id="password" placeholder="Enter password"><br>
           <span style="color:red;" class="error"></span>
         </div> -->
      
          <input type="submit" name="submit"  value="Sign in" class="submit">
          <p class="signup-link">
         No account?
         <a href="signup.php">Sign up</a>
       </p>
    </form>
 
</body>
</html>