<?php 
  require 'config.php';
  if(!isset($_SESSION['id'])){
	  header("location:../Main Page/Login/Sign-in.php") ;
	  }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	*{
		font-family: "Comic Sans MS", cursive, sans-serif;
		margin: 0;
		padding: 0	;
	}
		/* .myTable { background-color:#eee;border-collapse:collapse;text-align:left;font-size:20px;width:30%;}
		.myTable th { background-color: #3A5795;color:white; }
		.myTable td, .myTable th { padding:10px;border:1px solid #3A5795; } */
	table{
		display: flex;
		flex-direction: column;
		/* row-gap:70px ; */
		width: 100%;
		
	}
		.booking{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
height: 180px;
width: 100%;
transition: all .5s;
	/* display: block; */
}
	.books{
		width: 80%;
		position: relative;
		left: 10%;
	}
	.booking td {
  width: calc(100%/6);
  text-align: center;
}	
#checkmark
{
    transform: rotate(45deg);
    height: 45px;
    width: 20px;
    margin-left: 50%;
    border-bottom: 9px solid darkolivegreen;
    border-right: 9px solid darkolivegreen;
}
.heads{
	background-color: #eee;
	position: sticky;
	top: 0;
}
/* td.tick{
	width: 400px;
}
	 */
tr.booking:hover{
	scale: 1.1;
}

@media (max-width:697px) {
	.tick{
		display: none;
	}
	.booking td{
		width: calc(100%/5);
		font-size: 15px;
	}
	.books
{
	left: 5%;
}
}
@media (max-width:481px) {
	.books
{
	left: 2%;
}
}
@media (max-width:447px) {
	.books
{
	left: -2%;
}
}
</style>
</head>
<body>
<h2 align="center">Your list of booking so far</h2>
</br></br></br>

<div class="books">
<table>
	<tr class="heads">
		<th class="tick"></th>
	<th>Hotel </th>
<th>Room Name</th>
<th>Arrival-Date</th>
<th>Departure-Date</th>
<th>Booked on</th>
</tr>
<?php
  
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn,"
	SELECT r.roomname as roomname ,re.arrival as arrival,re.departure as departure,h.hotel_name as hotelname,re.bookdate as bookdate from tblroom r JOIN tblreservation re ON r.roomid=re.roomid JOIN roomtype h on h.roomtypeid=r.roomtypeid where re.userid=".$_SESSION['id'] 
	);
	if($result->num_rows==0){ ?>
		<tr>
		<th class="tick"></th>
	<th>Sorry,</th>
<th>You have</th>
<th>No</th>
<th>Reserved Room</th>
<th>So far</th>
		</tr>
		<?php
	}
	while($r = mysqli_fetch_assoc($result))   
				{
?>

<tr class="booking">
<td class="tick"><div id="checkmark"></div></td>
<td><?php echo $r['hotelname'] ?></td>
<td><?php echo $r['roomname'] ?></td>
<td><?php echo $r['arrival'] ?></td>
<td><?php echo $r['departure'] ?></td>
<td><?php echo $r['bookdate'] ?></td>
</tr>



<?php				

				
		}	
			
	}  
	?>
	</table>
	
	
	<!-- <table>

		<div class="lo">
			<tr><td>
			sfad
		</td></tr>
	<tr><td>
		sadsa
	</td></tr>
<tr><td>dsad</td></tr>	
</div>
		
	</table> -->
</div>
</body>
</html> 
