<?php

$obj = new mysqli("localhost","root","","pupro");

$errno = $obj->connect_error;

if($errno!=0)
{
	echo $obj->connect_error;
	exit;
}

session_start();


?>

<?php

if (isset($_POST['submit']))
{
  $type = $_POST['type'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  //$query= "SELECT id, type, name, status FROM user WHERE type='$Ugroup' AND username='$Uname' AND password=MD5('$Psw')";
  $result = $obj->query("SELECT id FROM user WHERE type='$type' AND email='$email' AND pass='$pass' ");
  $row= mysqli_num_rows($result);
  if($row == 1 )
  {
		$row1 = mysqli_fetch_array($result);
         
		$id =$row1['id'];
		//$name = $row1['name'];
   
        $_SESSION['id']=$id;
		$_SESSION['type']=$type;
		$_SESSION['name']=$name;
		//$_SESSION['username']=$Uname;
  		//echo $Type;
		if($type == 'admin')
		{ 
			header('Location:list.php');
	    }
     	else if( $type == 'user')
    	{
   		   header('Location:add.php');
    	}
	}
  else
  	{
 	  	header('Location:login.php');  
  	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Login Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<style>
		input{
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
	<div class="container my-5" style="width: 50%" margin:"auto">
		<h4 class="bg-light p-2 mb-4">Login Form</h4>
		<form method="post">
			<div class="row">
			  <div class="col-12">
			  	<select class="form-control" id="type" name="type">
					    <option value="admin">Admin</option>
						<option value="user">User</option>
				</select>
			  </div>
			  
			</div>
				<br/>
			<div class="row">
			  
			  <div class="col-12">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			  </div>
			</div>
			
			<div class="row">
				<div class="col-12">
				  <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
				</div>
			</div>
			<div class="row">
				<div class="col-12">
			  		<button type="submit" id="submit" name="submit" class="btn btn-primary">Login</button>
			  </div>
			</div><br>
			<div class="row">
				<div class="col-12">
				  <a href="register.php">New Registration</a>
				</div>
			</div>
			  
		  </form>

	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>