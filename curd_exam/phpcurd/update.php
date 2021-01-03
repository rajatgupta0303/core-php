<?php

$obj = new mysqli("localhost","root","","testcurd");

$errno = $obj->connect_error;
if($errno !=0)
{
	echo $obj->connect_error;
	exit;
}


$id = $_GET['upid'];
$exe = $obj->query("select * from user where id= $id ");

$row = $exe->fetch_object();
//echo "<pre>";
//print_r($row);


if(isset($_POST['submit']))
{
	$name = $_POST['fname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];

	$result = $obj->query("update user set name='$name',email='$email',contact='$contact' where id= $id  ");


	if($result)
	{ 
		
		header('location:read.php');
	}
	else
	{
		echo "Something worng";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<form method="post">
	<table border="1"  align="center" cellpadding="10" cellspacing="0">
		<tr>
			<td>Full name</td>
			<td><input type="text" name="fname" id="fname" value="<?php echo $row->name ?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" id="email" value="<?php echo $row->email ?>"></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact" id="contact" value="<?php echo $row->contact ?>"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Update"></td>
		</tr>
	</table>
	</form>
</body>
</html>