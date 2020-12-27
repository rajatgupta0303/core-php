
<?php

if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$rollno = $_POST['rollno'];
	$gender = $_POST['gen'];
	$degree = $_POST['degree'];
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Profile</title>
</head>
<body>
	<form method="POST">
		<h3>Student Information</h3>
		<table border="1" cellpadding="10px" cellspacing="0px">
			<tr>
				<td>First Name :</td>
				<td><input type="text" id="fname" name="fname"></td>
			</tr>
			<tr>
				<td>Last Name :</td>
				<td><input type="text" id="lname" name="lname"></td>
			</tr>
			<tr>
				<td>Enrollment No :</td>
				<td><input type="text" id="rollno" name="rollno"></td>
			</tr>
			<tr>
				<td>Gender :</td>
				<td>
					<input type="radio" name="gen" id="gen" value="Male">Male
					<input type="radio" name="gen" id="gen" value="Female">Female
				</td>
			</tr>
			<tr>
				<td>Degree :</td>
				<td>
					<select id="degree" name="degree">
						<option value="">Select Degree</option>
						<option value="BE">BE</option>
						<option value="BCA">BCA</option>
						<option value="BBA">BBA</option>
						<option value="BCom">B.Com</option>
						<option value="BSC">BSC</option>
					</select>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="ADD"></td>
				
			</tr>
		</table>
	</form>
<br/><br/>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<td><b>First Name</b></td>
			<td><b>Last Name</b></td>
			<td><b>Enrollment No</b></td>
			<td><b>Gender</b></td>
			<td><b>Degree</b></td>
		</tr>
		<tr>
			<td><?php if(isset($_POST['submit'])) echo $fname; ?></td>
			<td><?php if(isset($_POST['submit'])) echo $lname; ?></td>
			<td><?php if(isset($_POST['submit'])) echo $rollno; ?></td>
			<td><?php if(isset($_POST['submit'])) echo $gender; ?></td>
			<td><?php if(isset($_POST['submit'])) echo $degree; ?></td>
			
			
		</tr>
	</table>
</body>
</html>