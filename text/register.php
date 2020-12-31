<?php

$obj = new mysqli("localhost","root","","pupro");

$errno = $obj->connect_error;

if($errno!=0)
{
	echo $obj->connect_error;
	exit;
}

if(isset($_POST['submit']))
{

	$name = $_POST['fname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$pass = $_POST['pass'];
	
	$exe = $obj -> query("INSERT INTO `user`(`type`,`name`, `email`, `contact`,`pass`) VALUES ('user','$name','$email','$contact','$pass')");
	

	//echo $exe;
	if($exe)
	{
		
		echo "";
	}
	else
	{
		echo "Something worng";
	}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Registration Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<style>
		input{
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
	<div class="container my-5" align="center">
		<h4 class="bg-light p-2 mb-4">New Registration Form</h4>
		<form method="post">
			<div class="row">
			  <div class="col-6">
				<input type="text" class="form-control"  id="fname" name="fname" placeholder="Full Name">
			  </div>
			  
			</div>
			<div class="row">
			  
			  <div class="col-6">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			  </div>
			</div>
			<div class="row">
			  
			  <div class="col-6">
				<input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
			  </div>
			</div>
			<div class="row">
				<div class="col-6">
				  <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
			  <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
			  </div>
			</div><br>
			<div class="row">
				<div class="col-6">
				  <a href="login.php">Login</a>
				</div>
			</div>
			  
		  </form>

	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>