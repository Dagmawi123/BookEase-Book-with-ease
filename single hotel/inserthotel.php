<!DOCTYPE html>
<html>
<head>
  <title>Insert hotel</title>
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
        .logo img{

          float:left;
          width: 200px;
          height: auto;
          margin-top: 10px;
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
                width: 30%;
                opacity: 0.9;
              }

            .submitbtn:hover {
                opacity: 1;
            }

            .text1{
                  
                  padding-top: 60px;
                  font-family:'Azul',Footlight MT Light;
                color: black;
                height: 100%;
                width: 100%;
                padding-left: 450px;
                left:100px;
                font-size: 25px;
           }
            .error
            {
              font-size: 25px;
              color: red;
              text-decoration-color: red;
              margin-bottom: 20px;
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
    </header>
<h2 style="font-family: 'Azul',Arial;padding-top: 90px;"><center>Insert Hotel Details</center></h2>
<div class="text1">

<form method="post">  
  Room Type ID:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input required type="text" name="roomtypeid" placeholder="eg:12">
  <br><br>
  Hotel Name: &emsp;&emsp;&emsp;&emsp;<input required type="text" name="hotelname" placeholder="eg:Itege Taiytu Hotel"> 
   <br><br>&emsp;&emsp;
    <input type="submit" name="save_btn" class="submitbtn" value="Submit">  
  </form>
</header>
  <?php
require 'config.php';
 $hotelname = $roomtypeid = "";
if(isset($_POST['save_btn']))
{
  $roomtypeid = $_POST['roomtypeid'];
  $hotelname = $_POST['hotelname'];

        $que = "select * from roomtype"; 
        $res = mysqli_query($conn,$que);
        $flag=0;
        while($row = mysqli_fetch_array($res))
        {
          if($row['roomtypeid']==$roomtypeid)
          {
            $flag=1;
            echo '<div class="error">Hotel ID already in use. Re-enter details</div>';
          }
        }
        if($flag==0)
        {
          $q1="insert into roomtype(roomtypeid,hotel_name) values('$roomtypeid','$hotelname')";
          $res1=mysqli_query($conn,$q1);
         }
}
?>
</div>
</body>
</html>