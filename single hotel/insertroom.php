 <?php
require 'config.php';
$roomprice = $roomdescription = $roomname = $roomtypeid = $roomstatus = "";
if(isset($_POST['save_btn']))
{
  $roomtypeid = $_POST['roomtypeid'];
  $roomname = $_POST['roomname'];
  $roomprice = $_POST['roomprice'];
  $roomdescription = $_POST['roomdescription'];
  $roomstatus = $_POST['roomstatus'];
  $filename=$_FILES['img']['name'];
$image = $_FILES['img']['tmp_name'];
// $image_name = $_FILES['image']['name'];
// $image_size = $_FILES['image']['size'];
// $image_type = $_FILES['image']['type'];

    // echo "<script>alert('".$filename."')</script>";
    // echo "<script>alert('$image')</script>";
    // echo "<script>alert('$image_name')</script>";

        $que = "select * from roomtype"; 
        $res = mysqli_query($conn,$que);
        $q1="insert into tblroom(roomtypeid,roomname,roomprice,roomdescription,roomstatus,roomimage) values('$roomtypeid','$roomname','$roomprice','$roomdescription','$roomstatus','$filename')";
        $res1=mysqli_query($conn,$q1);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Insert hotel Room</title>
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
<h2 style="font-family: 'Azul',Arial;padding-top: 90px;"><center>Insert Hotel Room Details</center></h2>
<div class="text1">
<form method="post" enctype="multipart/form-data">  
  Room Type ID:
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input required type="text" name="roomtypeid" placeholder="eg:12">
  <br><br>
  Room Name: &emsp;&emsp;&emsp;&emsp;<input required type="text" name="roomname" placeholder="eg:Standard room">
  
  <br><br>
  Room Price: &emsp;&emsp;&emsp;&nbsp;<input required type="text" name="roomprice" placeholder="eg:4000">
  
  <br><br>
  Room Description: &emsp;&emsp;&emsp;&emsp;&nbsp;<input required type="text" name="roomdescription">
  <br><br>
  
  Room Status:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input required type="text" name="roomstatus" >
  <br><br>
  <h2>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Image Upload</h2><br>
       &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Image:
        <input type="file" name="img" required>
   <br><br>&emsp;&emsp;
    <input type="submit" name="save_btn" class="submitbtn" value="Submit">  
    
  </form>

</header>
 

</div>
</body>
</html>