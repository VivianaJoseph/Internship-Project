<?php
if(isset($_POST['sbtbtn'])){
	$username = $_POST['username'];
	$password = $_POST['password'];


	$con =mysqli_connect("localhost","root",'','adminlogin');
	$sql = "select * from admin where username ='$username' AND  password= '$password'";
	$query = mysqli_query($con, $sql );
	$row = mysqli_num_rows($query);

	if($row == 1)
	{
		echo "login succesfull";
		header('location:admindash.html');
	}
	else 
	{
		echo "failes to login try again";
	}
}
?>








<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width;initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Login Page</title>
</head>
<body style="background-image:url('https://image.shutterstock.com/image-illustration/white-empty-interior-concept-flower3d-260nw-250094086.jpg');background-repeat: no-repeat;
	background-size: 100% ;">>
	<!--div class="jumbotron" style="padding:30px;">-->
  <h1  align="center"><i>TRAVEL MANIAC</i></h1>
</div>
<form action="" method="POST"> 
	<!-- HEADER IMAGE YOU CAN ADD HERE IF YOU WISH  -->
	<div class="container my-5" style="border:2px solid black;">
	<h2 align="center">ADMIN LOGIN</h2>
	<div class="form-row">
		<div class="form-group col-12">
			<label class="font-weight-bold" style="color:black">Username:</label>
			<input type="text" name="username" required="" class="form-control">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-12">
			<label class="font-weight-bold" style="color: black">Password:</label>
			<input type="password" name="password" required="" class="form-control">
		</div>
	</div>
	<div class="form-row">
		<div class="col-12 my-2">
		<a href="admindashboard.html" class="btn btn-primary" name="sbtbtn" style="width:100%">login</a>
		</div>
	</div>

</div>
</form>
</body>
</html>