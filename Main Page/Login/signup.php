<?php 
require_once("../config.php");
if(isset($_POST['submit'])){
    // echo "<script>alert('loop')</script>";    
    $sql="INSERT into tbluser values(NULL,'".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','". md5($_POST['password'])."')" ; 
$result=$conn->query($sql);
if($result){
echo "<script>alert('User Registered Successfully!')</script>";
$_SESSION['id']=$conn->insert_id;
echo "<script>window.location='../index.php'</script>";}
else 
echo "<script>alert('Error! User is not registered!')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <script src="signup.js" defer></script>
    <title>Document</title>
</head>
<body>
    <form class="form" method="post" action="">
        <p class="title">Register </p>
        <p class="message">Signup now and get full access to our website. </p>
            <div class="flex">
            <label>
                <input required placeholder="" id="fname" name="fname" type="text" class="input">
                <span>Firstname</span>
            </label>
    
            <label>
                <input required placeholder="" id="lname" name="lname" type="text" class="input">
                <span>Lastname</span>
            </label>
        </div>  
                
        <label>
            <input required placeholder="" type="email" id="email" name="email" class="input">
            <span>Email</span>
        </label> 
            
        <label>
            <input required placeholder="" type="password" id="password" name="password" class="input">
            <span>Password</span>
        </label>
        <label>
            <input required  placeholder="" type="password" id="cpassword" name="cpassword" class="input">
            <span>Confirm password</span>
        </label>
        <input class="submit" type="Submit" name="submit" onclick="return validate()" value="Register">
        <p class="signin">Already have an account ? <a href="Sign-in.php">Signin</a> </p>
    </form>
</body>
</html>