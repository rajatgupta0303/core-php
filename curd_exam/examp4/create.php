<?php
include 'conn.php';


if(isset($_POST['submit']))
{
	$Name= $_POST['name'];
	$Rollno= $_POST['rollno'];
	$Degree= $_POST['degree'];
	$Collage= $_POST['clgname'];
	$City= $_POST['city'];
	$Email= $_POST['email'];

	$Gender= $_POST['gender'];
	$Contact= $_POST['contact'];
	$Address= $_POST['address'];


	$Clgtype= $_POST['ch'];
	$ct = implode(', ', $Clgtype);

	$Submit_date= $_POST['rdate'];

	

	$exe = $obj->query("INSERT INTO `admision`(`name`, `rollno`, `degree`, `collage`, `city`, `email`, `gender`, `contact`, `address`, `collage_type`, `sub_date`) VALUES ('$Name','$Rollno','$Degree','$Collage','$City','$Email','$Gender','$Contact','$Address','$ct','$Submit_date')");

	if($exe )
	{
		header('location:show.php');
	}
	else{
		echo "sorry";
	}



}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
</head>
<body><form method="post">
		<table border="1" align="center" cellspacing="0" cellpadding="10">
			<tr><td>User Name</td><td><input type="text" name="name" id="name" ></td></tr>

			<tr><td>Roll Number</td><td><input type="text" name="rollno" id="rollno" ></td></tr>

			<tr><td>Degree </td><td><input type="radio" name="degree" id="degree" value="Master" >Master
				<input type="radio" name="degree" id="degree" value="Bachlor" >Bachlor
				<input type="radio" name="degree" id="degree" value="Diploma"  >Diploma</td>
			</tr>

			<tr><td>Collage Name</td><td><input type="text" name="clgname" id="clgname" ></td></tr>

			<tr><td>City</td>
				<td><select name="city" id="city">
					<option>Select City </option>
					<option value="Lucknow">Lucknow</option>
					<option value="Delhi">Delhi</option>
					<option value="Kanpur">Kanpur</option>
					<option value="Noida">Noida</option>
				</select></td></tr>
			

			<tr><td>Email</td><td><input type="email" name="email" id="email" ></td></tr>

			<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" id="gender" value="Male"></input>Male
				<input type="radio" name="gender" id="gender" value="Female"></input>Femaale
			</td>
		</tr>

		<tr><td>Contact</td><td><input type="text" name="contact" id="contact" ></td></tr>
		<tr>
			<td>Address</td>
			<td><textarea name="address" id="address"></textarea></td>
		</tr>

			<tr><td>Collage Type</td>
				<td>
					<input type="checkbox" name="ch[]" id="chk1" value="Private">Private
					<input type="checkbox" name="ch[]" id="chk2" value="Government">Government
					<input type="checkbox" name="ch[]" id="chk3" value="Semi_Government">Semi Government
				</td>
			</tr>

			<tr><td>Submit date</td><td><input type="text" name="rdate" id="rdate" ></td></tr>

			<tr><td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit"></td></tr>
		</table></form>
</body>
</html>