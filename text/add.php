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
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add detalis</title>
</head>
<body>
		<a href="update.php?userid= <?php echo $a_id; ?>">Add Information</a>
</body>
</html>