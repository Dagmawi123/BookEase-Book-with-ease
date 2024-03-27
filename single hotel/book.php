<?php
require_once("config.php");
if(isset($_SESSION['checkin'])){
  // echo "<script>alert('".$_SESSION['checkin'].$_SESSION['checkout'].$_COOKIE['id'].$_SESSION['roomid']."')</script>";
  $sql="INSERT INTO `tblreservation`values(NULL,'".$_SESSION['checkin']."','".$_SESSION['checkout']."',".$_SESSION['id'].",".$_SESSION['roomid'].",current_timestamp())";
  $result=$conn->query($sql);
  if($result){
    $reserveid=$conn->insert_id;
    // echo "<script>alert('".$conn->insert_id."')</script>";  
  $sql="UPDATE `tblroom` SET `roomstatus` = 'reserved' WHERE `tblroom`.`roomid` =".$_SESSION['roomid']  ;            
  $result=$conn->query($sql);
    if($result)
    {
  $sql="INSERT INTO `tblpayment`values(NULL,"."current_timestamp()".",".$_SESSION['totalprice'].",".$_SESSION['id'].",".$reserveid.")";
  $result=$conn->query($sql);
  if($result) 
  {echo "<script>alert('Room Reserved!')</script>";  
  echo "<script>window.location='body1.php'</script>";
    }
  }}
  else
  echo "<script>alert('Unfortunately, Room not Reserved!')</script>";    
}?>
  