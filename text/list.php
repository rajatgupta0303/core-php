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

if($utype == 'admin')
	{
	}
else
	{
		header('Location:login.php');
	}

$result = $obj->query("select * from user where type='user' ");

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>User List</title>
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
</head><body>
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
			  <div class="col-3">
			  	<tr>
			  		<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>CONTACT</th>
				</tr>
			</div>
		</div>

			<?php
				while($row = $result->fetch_object())
			{
				?>
		<div class="row">
			  <div class="col-3">
				<tr>
					<td><?php echo $row->id; ?></td>
					<td><a href="show.php?showid= <?php echo $row->id; ?>"><?php echo $row->name; ?></a></td>
					<td><?php echo $row->email; ?></td>
					<td><?php echo $row->contact; ?></td>
			<!-- <td><a href="delete.php?delid= <?php echo $row->id; ?>">Delete</a> /
				<a href="update.php?upid= <?php echo $row->id; ?>"">Update</a></td> -->
		</tr>
			</div>
		</div>
	<?php
		}
	?>
</table>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>

</html>