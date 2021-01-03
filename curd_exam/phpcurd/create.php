<?php

$obj = new mysqli( "localhost","root","","testcurd");
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

	$exe = $obj -> query("insert into user(name,email,contact)values('$name','$email','$contact')");
    echo $exe;
    
	if($exe)
	{
		
		//header('location:read.php');
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
	<title>Create</title>
</head>
<body>
	<form method="post">
	<table border="1"  align="center" cellpadding="10" cellspacing="0">
		<tr>
			<td>Full name</td>
			<td><input type="text" name="fname" id="fname"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" id="email"></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact" id="contact"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit"></td>
		</tr>
	</table>
	</form>
</body>
</html>