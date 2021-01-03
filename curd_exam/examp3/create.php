<?php
include 'conn.php';

if(isset($_POST['submit']))
{
	$Fname= $_POST['fname'];
	$Lname= $_POST['lname'];
	$Ptype= $_POST['ptype'];
	$Ctime= $_POST['ctime'];
	$Amount= $_POST['amount'];
	$Email= $_POST['email'];
	
	$Edu= $_POST['ch'];
	$e = implode(', ', $Edu);

	$Rdate= $_POST['rdate'];
	$Pass= $_POST['pass'];
	$Cpass= $_POST['cpass'];
	
	if($Pass == $Cpass)
	{

	$exe = $obj->query("INSERT INTO `register`(`fname`, `lname`, `pstype`, `duration`, `amount`, `email`, `education`, `reg_date`, `pass`) VALUES ('$Fname','$Lname','$Ptype','$Ctime','$Amount','$Email','$e','$Rdate','$Pass')");

	if($exe )
	{
		echo "";
	}
	else{
		echo "sorry";
	}
	}
	else
		{
			echo "Password and Confirm Password mot match";
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
			<tr><td>First Name</td><td><input type="text" name="fname" id="fname" ></td></tr>

			<tr><td>Last Name</td><td><input type="text" name="lname" id="lname" ></td></tr>

			<tr><td>Pass Type</td><td><input type="radio" name="ptype" id="ptype" value="Ist Division" >Ist Division
				<input type="radio" name="ptype" id="ptype" value="IInd Division" >IInd Division
				<input type="radio" name="ptype" id="ptype" value="IIIrd Division"  >IIIrd Division</td>
			</tr>

			<tr><td>Duration</td>
				<td><select name="ctime" id="ctime">
					<option>Select Time</option>
					<option value="2 year">2 Year</option>
					<option value="3 year">3 Year</option>
					<option value="4 year">4 Year</option>
					<option value="5 year">5 Year</option>
				</select></td></tr>

			<tr><td>Amount</td><td><input type="text" name="amount" id="amount" ></td></tr>


			<tr><td>Email</td><td><input type="email" name="email" id="email" ></td></tr>
			<tr><td>Education</td>
				<td>
					<input type="checkbox" name="ch[]" id="chk1" value="BSc">BSc
					<input type="checkbox" name="ch[]" id="chk2" value="BTech">BTech
					<input type="checkbox" name="ch[]" id="chk3" value="MBA">MBA
					<input type="checkbox" name="ch[]" id="chk4" value="MTeck">MTech
					<input type="checkbox" name="ch[]" id="chk5" value="Medical">Medical
				</td>
			</tr>
			<tr><td>Registration date</td><td><input type="text" name="rdate" id="rdate" ></td></tr>
			<tr><td>PAssword</td><td><input type="password" name="pass" id="pass" ></td></tr>
			<tr><td>Confirm Password</td><td><input type="password" name="cpass" id="cpass" ></td></tr>

			<tr><td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit"></td></tr>
		</table></form>
</body>
</html>