<?php
require_once('config.php');
// echo "<script>alert('".$_COOKIE."')</script>";
// setcookie($cookie_name,"",0,'/');
$emailErr=$passErr="";
$pass=$email="";
if(isset($_POST['submit'])){
 
$cookie_name="id";
 $pass=$_POST['password'];
  $email=$_POST['email'];
  $sql='select * from `tbluser` where email='."'".$_POST['email']."'";
$result=$conn->query($sql);
if($result->num_rows==1){
$row=$result->fetch_assoc();
// if($row['password']!=md5($_POST['password']))
if($row['password']!=($_POST['password']))
$passErr="Incorrect password";

else{
// setcookie($cookie_name,$row['userid'],0,'/');
// echo "<script>alert('".$row['userid']."')</script>";
// echo '<script>alert("'.$_COOKIE[$cookie_name].'")</script>';

$_SESSION['id']=$row['userid'];
$_SESSION['randomnumber']=rand(5000,6000);

$to_email = $_POST['email'];
 $subject = "Login Verification email";
 $body = "Hello,Dagm Please verify that you are trying to login into your account by entering this [".$_SESSION['randomnumber']." ] number ";
 $headers = "From: BookEase Company Inc";

 if (mail($to_email, $subject, $body, $headers)) {
   echo "<script>alert('Email successfully sent to $to_email...')</script>";
   echo "<script>alert('Enter the verification number send to your email')</script>";
echo "<script>window.location='confirm.php'</script>" ;
 } else {
  echo "<script>alert('Email sending was unsucessful.')</script>";
 }

    }}
    else {
$emailErr="User not registered";
    }
}
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
        <p class="form-title">Sign in to your account</p>
         <div class="input-container">
           <input type="email" id="email" value="<?php echo $email ?>"  name="email" placeholder="Enter email"><br>
           <span style="color:red;" class="error"><?php echo $emailErr ?></span>
       </div>
       <div class="input-container">
           <input type="password" name="password"  value="<?php echo $pass ?>" id="password" placeholder="Enter password"><br>
           <span style="color:red;" class="error"><?php echo $passErr ?></span>
         </div>
      <div class="input-container">
           <input type="text" name="confirm"   id="confirm" placeholder="Enter"><br>
           <span style="color:red;" class="error"></span>
         </div>
          <input type="submit" name="submit" onclick="return validate()" value="Sign in" class="submit">
          <p class="signup-link">
         No account?
         <a href="signup.php">Sign up</a>
       </p>
    </form>
 
</body>
</html>