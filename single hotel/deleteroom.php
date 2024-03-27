<!DOCTYPE html>
<html>
<head>
  <title >Delete hotel</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Alike+Angular|Asul|Eczar|Work+Sans" rel="stylesheet">
<style type="text/css">
        *{
          margin: 0;
          padding: 0;
        }
        header{
            background :linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));
            height: 10vh;
            background-size: cover;
            background-position: center;
            font-family: Century Gothic;
        }
        ul{
          float: right;
          list-style-type: none;
          margin-top: 25px;
          padding-right:60px;
        }
        ul li{
          display: inline-block;
        }
        ul li a{
          text-decoration: none;
          color: #fff;
          padding: 5px 20px;
          border: 1px solid transparent;
          transition: 0.9s ease-out;
        }
        ul li a:hover{
          background-color: #fff;
          color: #000;
        }
        .main{
          max-width: 1200px;
          margin:auto;
        }  
        body
        {
          background-color: #fff5cc;
            background-size: cover;
            background-repeat: no-repeat;
        }
            .text1{
                  
                  padding-top: 100px;
                  font-family:'Azul',Footlight MT Light;
                color: black;
                height: 100%;
                padding-left: 450px;
                left:100px;
                font-size: 35px;
           }
   input[type=text]{
                width: 20%;
                padding: 15px;
                margin: auto;
                display: inline-block;
                border: groove;
                background: #f1f1f1;
            }
  input[type=text]:focus{
                background-color: #ddd;
                outline: none;
            }

          .submitbtn {
                background-color: #4CAF50;
                color: white;
                padding: 16px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 50%;
                opacity: 0.9;
              }

            .submitbtn:hover {
                opacity: 1;
            }
</style>
</head>
<body>

<header>
      <div class="main">
        <ul>
        <li><a href="admin.php">Admin HOME</a></li>
        </ul>  
  </div>
<h2 style="font-family: 'Azul',Arial;padding-top: 100px;"><center>Delete Hotel Room</center></h2>
<div class="text1">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  &emsp;&emsp;Room ID: &emsp;&emsp;&emsp;&emsp;<input type="text" name="roomid" placeholder="eg:12">
  <br><br>
  &emsp;&emsp;
  <input type="submit" name="save" class="submitbtn" value="Submit">
</form>
</body>
</html>

<?php
require 'config.php';
$roomid ="";

if(isset($_POST['save']))
{
  $roomid = $_POST["roomid"];
  $q1="DELETE FROM tblroom WHERE roomid='$roomid'";
  $res1=mysqli_query($conn,$q1);
}
?>

