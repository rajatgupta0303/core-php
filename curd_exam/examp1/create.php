<?php

include "conn.php";

if(isset($_POST['submit']))
{
	$Name = $_POST['name'];
	$Address = $_POST['address'];
	$City = $_POST['city'];
	$Gender = $_POST['gender'];
	
	$hob = $_POST['chk'];
	$hobby = implode(' , ', $hob); 



  

  //	echo "$Name<br/>";
  //	echo "$Address<br/>";
  //	echo "$City<br/>";
  //	echo "$Gender<br/>";
//	print_r($hobby);

	$exe = $obj -> query("insert into exap (name, address, city, gender, hobby)value('$Name','$Address','$City','$Gender','$hobby')");

	if($exe)
	{
		header('location:show.php');

	}
	else
	{
		echo "nooo";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Page</title>
</head>
<body>
	<form method="post">
	<table border="1" cellspacing="0" cellpadding="10" align="center">
		<h3 align="center">From</h3>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" id="name"></ins></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name="address" id="address"></textarea></td>
		</tr>
		<tr>
			<td>City</td>
			<td><select name="city" id="city">
				<option>Select City</option>
				<option value="kan">Kanpur </option>
				<option value="kann">Kannauj</option>
				<option value="agra">Agra</option>
				<option value="lick">Lucknow</option>
			</select></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" id="gender" value="male"></input>Male
				<input type="radio" name="gender" id="gender" value="female"></input>Femaale
			</td>
		</tr>

		<tr>
			<td>Hobbies</td>
				<td>
				<input type="checkbox" id="chk1" name="chk[]" value="play">Playing
				<input type="checkbox" id="chk2" name="chk[]" value="swwim">Swwiming
				<input type="checkbox" id="chk3" name="chk[]" value="read">Reading
				<input type="checkbox" id="chk4" name="chk[]" value="chess">Chess
			</td>
		</tr>
		<tr>
			
			<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></input></td>
		</tr>
	</table>
	</form>
</body>
</html>