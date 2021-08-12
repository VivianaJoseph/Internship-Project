<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

if(isset($_POST['insert'])){	
 
 $name = $_POST['name'];
 $nights = $_POST['nights'];
 $destination = $_POST['destination'];
 $transactiondate = $_POST['transactiondate'];
 
 $arrival = $_POST['arrival'];
 $departure = $_POST['departure'];

 

$connect = mysqli_connect("localhost","root","","adminlogin");
echo "connected";
 $query = "INSERT INTO booking(name,nights,destination,transactiondate,arrival,departure) VALUES (
 '$name','$nights','$destination','$transactiondate','$arrival','$departure')";

 $qryobj= mysqli_query($connect,$query);
 if(isset($qryobj))
 {
 	echo "Data Inserted";
 }else
 {
 	echo "Not Inserted";
 }
}


?>
<?php 
if(isset($_POST['insert']))
include("script.php");
//header('location:Home (2).html');

?>

<!--

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 <link rel="stylesheet" href="S.css">
</head>
			<section class="booking">
	 <div class="container">
		<form action="book.php" method="post" class="form">
					<h5 class="section-head">
				<span class="heading" style="color:white">BOOK NOW</span>
				
			</h5>
			<div class="input-group">
				<label  class="input-label">Name</label>
				<input type="text"  name="name" class="input" >
			</div>
						<div class="input-group">
				<label  class="input-label">Night</label>
				<input type="number" name="nights" class="input" >
			<div class="input-group">
				<label for="destination" class="input-label">destination</label>
				<input type="text" name="destination"class="input" >
			</div>
			
			<div class="input-group">
				<label  class="input-label">Transaction Date</label>
				<input type="Date" class="input" name="transactiondate" >
			</div>
			
			<div class="input-group">
				<label  class="input-label">Time of Arrival</label>
				<input type="Time" class="input" name="arrival" >
			</div>
			<div class="input-group">
				<label  class="input-label">Time of Departure</label>
				<input type="Time" class="input" name="departure" >
			</div>
			

				
			</div>
			
	<button name="insert" class="btn form-btn btn-purple" >Submit</button>
<a href="Home (2).html" class="btn form-btn btn-purple" name="exit"  >BACK</a>

	
			
			</h5>
		
	
		
	
</form>
</div>
</section>
</html>
-->
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width;initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title> BOOK NOW</title>
	</head>
<body style= "background-image:url('https://image.freepik.com/free-photo/interior-relax-space-furniture-3d-rendering-background-white-decoration-minimal_42090-781.jpg');background-repeat: no-repeat;
	background-size: 100%;">
</head>
	<!--style="background-image:linear-gradient(90deg,lightcyan,skyblue)"-->
<form action="book.php" method="post" >
	<!--action="newaccount.php" method="POST"--> 
	<div class="container" style="width:1500px" paddin1g="16px"  style="border:2px solid black;">
	<h2 >BOOK NOW</h2>
	<div class="form-row"  >
		<div class="form-group col-lg-3" align="left" >
			<label class="font-weight-bold" style="color: black">Name:</label>
			<input type="text" name="name" pattern="[A-za-z]{1,32}" required="" class="form-control" placeholder="enter your name">
		</div></div>
		<div class="form-row">
		<div class="form-group col-lg-3"align="left" >
			<label class="font-weight-bold" style="color: black">Nights:</label>
			<input type="number" name="nights" required="" class="form-control" placeholder="enter nights" align="center">
		</div></div>
		<div class="form-row" >
		<div class="form-group col-lg-3"align="left">
			<label class="font-weight-bold" style="color: black">Destination:</label>
			<input type="text" name="destination" required="" class="form-control"  placeholder="enter your address">
		</div></div>
		
		
		<!--<div class="form-group col-lg-2">
			<label class="font-weight-bold" style="color: black">Gender:</label>
			<select class="custom-select" name="gender">
				<option>MALE</option>
				<option>FEMALE</option>
			</select>
		</div>-->
		<div class= "form-row"align="left">
		<div class="form-group col-lg-3" >
			<label class="font-weight-bold" style="color: black">Transaction Date:</label>
			<input type="Date" name="transactiondate" required="" class="form-control" placeholder="enter transactiondate">
		</div></div>
		<div class= "form-row">
		<div class="form-group col-lg-3"align="left">
			<label class="font-weight-bold" style="color: black">Time of arrival:</label>
			<input type="Time" name="arrival" required="" class="form-control" >
		</div></div>
		
		<!--<div class="form-group col-lg-4">
			<label class="font-weight-bold" style="color: black">Preferred Food:</label>
			<select class="custom-select" name="prefood">
				<option>Veg</option>
				<option>Non-Veg</option>
			</select>
		</div><hr>-->
		<div class= "form-row"align="left">
		<div class="form-group col-lg-3">
			<label class="font-weight-bold" style="color: black">Time of Departure:</label>
			<input type="Time" name="departure" required="" class="form-control"  >
		</div>
	</div>
	<div class="form-row" align="center">
		<div class="form-group col-lg-3">
		<button class="btn btn-primary" name="insert" style="width:100%">SUBMIT</button>
		</div>
	</div>
	<div class="form-row" >
		<div class="col-12 my-3"><br>
		<left><label> <a href="Home (2).html">BACK</a></label></left>
		</div>
	</div>
</div>
</form>
</body>
</html>