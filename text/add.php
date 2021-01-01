<?php

$obj = new mysqli("localhost","root","","pupro");

$errno = $obj->connect_error;

if($errno!=0)
{
	echo $obj->connect_error;
	exit;
}

session_start();
$a_id = $_SESSION['id'];

$utype = $_SESSION['type'];
//echo $a_id;
//echo $utype;

if($utype == 'user')
	{
	}
else
	{
		header('Location:login.php');
	}


//$id = $_GET['showid'];
$exe = $obj->query("select * from user where id= $a_id ");

$row = $exe->fetch_object();

?>


		


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Add detalis</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<style>
		h5{
		            background-color: cornflowerblue;
		            padding: 8px;
		            margin: 0;
		            color: #fff;
		        }
		        span{
		            font-weight: 600;
		        }
	</style>
</head>

<body>
	<div class="container">
		<div class="">
			<div class="text-center">
				<img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/IMI_Bhubaneswar_Logo.png" class="img-fluid p-2" alt="Responsive image" >
			</div>
		</div>
		<div style="border: 1px solid #ccc; margin: 20px 0; border-radius: 5px;">
		<h5>User Information</h5>
		<table class="table">
		<tbody>
					
			<div class="row">
			  <div class="col-6">
			  	<tr>
				<td><b>Name  : <?php echo $row->name; ?></b></td>
				<td><b>Email Id  : <?php echo $row->email; ?></b></td>
				</tr>
			  </div></div>

			
				<div class="row">
					<div class="col-6">
						<tr>
						<td><b> Contact : <?php echo $row->contact; ?></b></td>
						<td><b>Roll Number  : <?php echo $row->rollnum; ?></b></td>
					</tr>
			 		 </div>
				</div>
			
				<div class="row">
					<div class="col-6">
						<tr>
							<td><b>Specilization  : <?php echo $row->specip; ?></b></td>
							<td><b>Gender  : <?php echo $row->gender; ?></b></td>
						</tr>
			 		</div>
				</div>
				<div class="row">
					<div class="col-6">
						<tr>
							<td><a href="update.php?userid= <?php echo $a_id; ?>">Add Information</a></td>
							<td><a href="show.php?showid= <?php echo $a_id; ?>">Your Resume	</a></td>
						</tr>
					</div>
				</div>				
			</tbody>
		</table>
			
				
				
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>