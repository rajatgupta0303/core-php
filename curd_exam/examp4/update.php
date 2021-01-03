<?php
include 'conn.php';

$id = $_GET['upid'];
//echo $id;
 $result = $obj->query("select * from admision where id=$id");
 $row = $result->fetch_object();
 //echo "<pre>";
 //print_r($row);
 $d = $row->degree;
 $c =$row->city;
 $g =$row->gender;

 $co=$row->collage_type;
 $co1 = explode(', ', $co);

 	//echo "$d<br/>";
	//echo "$c<br/>";
	//echo "$g<br/>";
	 //echo "<pre>";
	//print_r($co1);


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

	

	$exe = $obj->query("update admision set name='$Name', rollno='$Rollno', degree='$Degree', collage='$Collage', city='$City', email='$Email', gender='$Gender', contact='$Contact', address='$Address', collage_type='$ct', sub_date='$Submit_date' where id=$id");

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
			<tr><td>User Name</td><td><input type="text" name="name" id="name" value="<?php echo $row->name; ?>"></td></tr>

			<tr><td>Roll Number</td><td><input type="text" name="rollno" id="rollno" value="<?php echo $row->rollno; ?>"></td></tr>

			<tr><td>Degree </td><td><input type="radio" name="degree" id="degree" value="Master" <?php if($d == 'Master') echo 'checked'; ?> >Master
				<input type="radio" name="degree" id="degree" value="Bachlor" <?php if($d == 'Bachlor') echo 'checked'; ?> >Bachlor
				<input type="radio" name="degree" id="degree" value="Diploma"  <?php if($d == 'Diploma') echo 'checked'; ?> >Diploma</td>
			</tr>

			<tr><td>Collage Name</td><td><input type="text" name="clgname" id="clgname" value="<?php echo $row->collage; ?>"></td></tr>

			<tr><td>City</td>
				<td><select name="city" id="city">
					<option>Select City </option>
					<option value="Lucknow" <?php if($c == 'Lucknow') echo 'selected'; ?> >Lucknow</option>
					<option value="Delhi" <?php if($c == 'Delhi') echo 'selected'; ?> >Delhi</option>
					<option value="Kanpur" <?php if($c == 'Kanpur') echo 'selected'; ?> >Kanpur</option>
					<option value="Noida" <?php if($c == 'Noida') echo 'selected'; ?> >Noida</option>
				</select></td></tr>
			

			<tr><td>Email</td><td><input type="email" name="email" id="email" value="<?php echo $row->email; ?>"></td></tr>

			<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" id="gender" value="Male" <?php if($g == 'Male') echo 'checked'; ?> >Male
				<input type="radio" name="gender" id="gender" value="Female" <?php if($g == 'Female') echo 'checked'; ?> >Female
			</td>
		</tr>

		<tr><td>Contact</td><td><input type="text" name="contact" id="contact" value="<?php echo $row->contact; ?>"></td></tr>
		<tr>
			<td>Address</td>
			<td><textarea name="address" id="address"><?php echo $row->address; ?></textarea></td>
		</tr>

			<tr><td>Collage Type</td>
				<td>
					<input type="checkbox" name="ch[]" id="chk1" value="Private" 
					<?php if(in_array('Private', $co1)) echo 'checked';?>>Private
					<input type="checkbox" name="ch[]" id="chk2" value="Government" 
					<?php if(in_array('Government', $co1)) echo 'checked';?>>Government
					<input type="checkbox" name="ch[]" id="chk3" value="Semi_Government" 
					<?php if(in_array('Semi_Government', $co1)) echo 'checked';?>>Semi Government
				</td>
			</tr>

			<tr><td>Submit date</td><td><input type="text" name="rdate" id="rdate" value="<?php echo $row->sub_date; ?>"></td></tr>

			<tr><td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Update"></td></tr>
		</table></form>
</body>
</html>