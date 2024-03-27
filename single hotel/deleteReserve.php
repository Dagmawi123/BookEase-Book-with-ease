<?php 
require_once('config.php');
if(isset($_REQUEST['id'])){
 $sql="update tblroom set roomstatus='unreserved' where roomid=".$_REQUEST['id'];
 $result=$conn->query($sql);
 if($result){       
    echo "<script>alert('Reservation Deleted successfully,Room is now available for booking!');</script>";
echo "<script>window.location='allbookings.php'</script>";
}
else
echo "<script>alert('Reservation cannot be removed!');</script>";
}
?> 

   