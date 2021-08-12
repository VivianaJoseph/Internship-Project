<html>
	 <head>
			<title>Booking Confirmation</title>
	        <link rel="stylesheet" type="text/css" href="confirm.css">
	        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	
	        <style>

			.Previousbtn{
				background-color: blue;
				color: white;
				padding: 10px 20px;
				margin: 10px 10px;
				border: none;
				cursor: pointer;
				width: 250%;
				opacity: 0.9;
				}
			hr {
				border: 1px solid #f1f1f1;
				margin-bottom: 25px;
				}

			td {
				height: 10px;
				vertical-align: left;
				text-align: left;
				}
				
				
			      th{
					padding: 15px;
					text-align: left;
					}
					
			table {
					border-collapse: separate;
					margin-right: auto;
					margin-left: auto;
					}
					
			.cancel{
				    background-color: blue;
					color: white;
					padding: 10px 10px;
					margin: 10px 10px;
					border: none;
					cursor: pointer;
					width: 250%;
					opacity: 0.9;
			}
		</style>
	</head>
	 <body style="background-image:url('https://image.freepik.com/free-photo/cozy-interior-design-with-curtain_23-2148440142.jpg');background-repeat: no-repeat;
	background-size: 110% ;">>
	<form action="" method="POST">
	<h1 align="center">Travel Maniac</h1>
	<div class="container my-2" style="border:2px solid black;">
	<table style="width:25%" >

	<h2 align="center">Booking Summary</h2>
	<table align="center" width="450px" border="1" cellspacing="5">
		<th> SL.no</th>
		<th> NAME </th>
		<th> Nights</th>
		<th> Hotel Name</th>
		<th> Transactiondate</th>
		<th> TimeofArrival</th>
		<th> TimeofDeparture</th>
		<!--<th> Cancel Booking</th>-->
		
		
		<tbody>
			<?php
			$connect = mysqli_connect("localhost","root","","adminlogin");
           $query="SELECT * FROM booking ORDER BY SL DESC LIMIT 1";
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
						//echo "<td><a href=userdelete.php?sl=".$row['SL']. ">CANCEL BOOKING</a></td>";
						
						echo '</tr>';
				}
				
					
				?>
				

 
  
</tbody>
</table>
</table>
<td>
<a href="Home (2).html" class="btn btn-primary" name="exit"  >BACK</a></td>

</div>
</form>
</body>
</html>