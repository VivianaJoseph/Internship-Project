 
 



<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width;initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>view and delete admin page</title>
</head>


<body style="background-image:url('https://image.freepik.com/free-photo/empty-room-white-wooden-floor-interior-design-3d-rendering_43151-2359.jpg');background-repeat: no-repeat;
	background-size: 100% ;">
	<!--<div class="jumbotron" style="padding:1px;">-->
  <h1 align="center"class="display:block"><i><b>TRAVEL MANIAC</b></i></h1>
  <h4 align="center"class="lead"><i>ADMIN DASHBOARD</i></h4>
  	<form action="" method="GET"> 
	<!-- HEADER IMAGE YOU CAN ADD HERE IF YOU WISH  -->
	<div class="container my-11" style="border:2px solid black;">
	<h4 align="center">VIEW HOTEL ROOM</h4>

<body>
	<table align="center"     width="450px" border="1" cellspacing="5">
		<th> Sl.no</th>
		<th>  Name  </th>
		<th> Nights</th>
		<th> Hotel Name</th>
		<th> Transaction date</th>
		<th> Time of Arrival</th>
		<th> Time of Departure</th>
		<th> Cancel Booking</th>
		
		
		<tbody>
			<?php

			$connect = mysqli_connect("localhost","root","","adminlogin");
           $query="SELECT * from booking  order by SL";

            $obj =mysqli_query($connect,$query);

            while($row = mysqli_fetch_assoc($obj))

				{	
					/*echo '<td style="font-size:35px;">'.$_POST['SL'].'</td>';
						echo '<td style="font-size:35px;">'.$_POST['name'].'</td>';
						echo '<td style="font-size:35px;">'.$_POST['nights'].'</td>';
						echo '<td style="font-size:35px;">'.$_POST['destination'].'</td>';
						echo '<td style="font-size:35px;">'.$_POST['transactiondate'].'</td>';
						echo '<td style="font-size:35px;">'.$_POST['transtionid'].'</td>';
						echo '<td style="font-size:35px;">'.$_POST['arrival'].'</td>';
						echo '<td style="font-size:35px;">'.$_POST['departure'].'</td>';
						echo '<td style="font-size:35px;">'.$_POST['total'].'</td>';
						echo '<tr>';*/

						echo '<td>'.$row['SL'].'</td>';
						echo '<td>'.$row['name'].'</td>';
						echo '<td>'.$row['nights'].'</td>';
						echo '<td>'.$row['destination'].'</td>';
						echo '<td>'.$row['transactiondate'].'</td>';
						echo '<td>'.$row['arrival'].'</td>';
						echo '<td>'.$row['departure'].'</td>';
						echo "<td><a href=delete.php?sl=".$row['SL']. " onclick='return checkdelete()'>CANCEL BOOKING</a></td>";
						
						echo '</tr>';

					
					
					}
					
				?>

</tbody>
		
	
	</table>

	
<div class="form-row">
		
		<div align="center" class="col-12 my-2" >

		<a href="Home (2).html" class="btn btn-primary" name="exit" style="width:14%"  >BACK</a>
		</div>
</div>

</body>
</div>
</form>
<script>
	function checkdelete() 
	{
		return confirm('Are you sure you want to delete this record');
	}
</script>
</body>
</html>