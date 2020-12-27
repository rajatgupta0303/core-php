
<?php

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$hobby = $_POST['hobby'];
	$hobby1 = $_POST['hobby1'];
	$hobby2 = $_POST['hobby2'];
	$hobby3 = $_POST['hobby3'];
	$aboutme = $_POST['aboutme'];
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
		<table border="1" cellpadding="10px" cellspacing="0px" bgcolor="turquoise">
			<tr>
				<td>Name :</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td>Hobby :</td>
				<td>
					<input type="checkbox" id="hobby" name="hobby" value="Dancing">Dancing
					<input type="checkbox" id="hobby1" name="hobby1" value="Reading">Reading
				 <br/>
					<input type="checkbox" id="hobby2" name="hobby2" value="Singing">Singing
					<input type="checkbox" id="hobby3" name="hobby3" value="Teaching">Teaching
				</td>
			</tr>
			<tr>
				<td>About Me :</td>
				<td><textarea cols="20" rows="5" name="aboutme" id="aboutme"></textarea></td>
			</tr>
			.
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="ADD"></td>
				
			</tr>
		</table>
	</form>
<br/><br/>
	<table>
		<tr>
			<td><b>Name : </b></td>
			<td><?php if(isset($_POST['submit'])) echo $name; ?></td>
		</tr>
		<tr>
			<td><b>Hobby : </b></td>
			<td><?php if(isset($_POST['submit'])) echo ($hobby."  ".$hobby1."  ".$hobby2."  ".$hobby3); ?></td>
		</tr>
		<tr>
			<td><b>About Me : </b></td>
			<td><?php if(isset($_POST['submit'])) echo $aboutme; ?></td>
		</tr>
		
	</table>
</body>
</html>