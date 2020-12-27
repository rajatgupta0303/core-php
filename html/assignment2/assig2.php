
<?php

if(isset($_POST['submit']))
{
	$cname = $_POST['cname'];
	$ctype = $_POST['ctype'];
	$degree = $_POST['degree'];
	$adds = $_POST['adds'];
	$city = $_POST['city'];
	$state = $_POST['state'];
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>College Resgistration</title>
</head>
<body>
	<form method="POST">
		<h3>Collage Information</h3>
		<table border="1" cellpadding="10px" cellspacing="0px">
			<tr>
				<td>Collage Name :</td>
				<td><input type="text" id="cname" name="cname"></td>
			</tr>
			<tr>
				<td>Collage Type :</td>
				<td>
					<input type="radio" name="ctype" id="ctype" value="Government">Government
					<input type="radio" name="ctype" id="ctype" value="Self Finance">Self Finance
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
				<td>Address :</td>
				<td><textarea cols="20" rows="5" id="adds" name="adds"></textarea></td>
			</tr>
			<tr>
				<td>City :</td>
				<td>
					<select name="city" id="city">
						<option value="">Select City</option>
						<option value="Kanpur">Kanpur</option>
						<option value="Agra">Agra</option>
						<option value="Lucknow">Lucknow</option>
						<option value="Manpuri">Manpuri</option>
						<option value="Vanaras">Vanaras</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>State :</td>
				<td>
					<select name="state" id="state">
						<option value="">Select State</option>
						<option value="Utaar Pradesh">Utaar Pradesh</option>
						<option value="Bihar">Bihar</option>
						<option value="Gujraat">Gujraat</option>
						<option value="Himachal Pradesh">Himachal Pradesh</option>
						<option value="Delhi">Delhi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="ADD"></td>
				
			</tr>
		</table>
	</form>

	<table border="1" cellspacing="0" cellpadding="5">
		<tr bgcolor="yellow">
			<td><b>Collage Name</b></td>
			<td><b>Collage Type</b></td>
			<td><b>Degree</b></td>
			<td><b>Address</b></td>
			<td><b>City</b></td>
			<td><b>State</b></td>
		</tr>
		<tr>
			<td>
				<?php if(isset($_POST['submit'])) echo $cname; ?></td>
			<td><?php if(isset($_POST['submit'])) echo $ctype; ?></td>
			<td><?php if(isset($_POST['submit'])) echo $degree; ?></td>
			<td><?php if(isset($_POST['submit'])) echo $adds; ?></td>
			<td><?php if(isset($_POST['submit'])) echo $city; ?></td>
			<td><?php if(isset($_POST['submit'])) echo $state; ?></td>
		</tr>
	</table>
</body>
</html>