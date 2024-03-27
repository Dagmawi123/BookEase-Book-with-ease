<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
		.myTable { background-color:#eee;border-collapse:collapse;text-align:left;font-size:20px;width:30%;}
		.myTable th { background-color: #3A5795;color:white; }
		.myTable td, .myTable th { padding:10px;border:1px solid #3A5795; }
	</style>
</head>
<body>
</br></br></br></br></br>
<div align="center">
<?php
    require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn,"SELECT * FROM tbluser WHERE userid = $id");
    // $row = mysqli_fetch_assoc($result);
  
				echo "<table class=\"myTable\">   ";  
				echo "</thead>";
				echo "<tbody>";
			
				while($r = mysqli_fetch_array($result))   
				{
					 echo ' <tr> 
								<td>Name</td>
								<td>'.$r['fname'].' '.$r['lname'].'</td>
                             </tr>';
					//  echo ' <tr> 
					// 			<td>Username</td>
					// 			<td>'.$r['username'].'</td>
                    //           </tr>';
								 echo ' <tr> 
								<td>Email</td>
								<td>'.$r['email'].'</td>
                                </tr>';
				}
				echo "</tbody>";
				echo "</table>";
				
		}	else
			echo "<script>alert('Please login first')</script>";	
			
        
    
	?>
</div>
</body>
</html> 
