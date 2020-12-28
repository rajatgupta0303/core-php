
<?php
//print_r($_POST);
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$hobby = $_POST['hobby'];
	$aboutme = $_POST['aboutme'];
	$hobby1 = implode(', ', $hobby);
	//print_r($hobby);
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
					<input type="checkbox" id="hobby" name="hobby[]" value="Dancing">Dancing
					<input type="checkbox" id="hobby1" name="hobby[]" value="Reading">Reading
				 <br/>
					<input type="checkbox" id="hobby2" name="hobby[]" value="Singing">Singing
					<input type="checkbox" id="hobby3" name="hobby[]" value="Teaching">Teaching
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
			<td><?php if(isset($_POST['submit'])) echo $hobby1; ?></td>
		</tr>
		<tr>
			<td><b>About Me : </b></td>
			<td><?php if(isset($_POST['submit'])) echo $aboutme; ?></td>
		</tr>
		
	</table>
</body>
</html>