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
<html>
<head>
	<title>Hhow User List</title>
</head>
<body>



<table border="1" align="center" cellspacing="0" cellpadding="10">
	<tr>
		<td>ID</td>
		<td>NAME</td>
		<td>EMAIL</td>
		<td>CONTACT</td>
		<td>ACTION</td>
	</tr>

	<?php

	while($row = $result->fetch_object())
		{
	?>
		<tr>
			<td><?php echo $row->id; ?></td>
			<td><a href="show.php?showid= <?php echo $row->id; ?>"><?php echo $row->name; ?></a></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->contact; ?></td>
			<td><a href="delete.php?delid= <?php echo $row->id; ?>">Delete</a> /
				<a href="update.php?upid= <?php echo $row->id; ?>"">Update</a></td>
		</tr>
	<?php
		}
	?>
</table>
</body>
</html>