<?php
include 'conn.php';

$id = $_GET['upid'];
//echo $id;
$result = $obj->query("select * from register where id= $id");

$row= $result->fetch_object();

$pt = $row->pstype;
$d = $row->duration;

$ed = $row->education;
$ed1 = explode(', ', $ed);

//echo "$pt<br>";
//echo $d;
//echo $ed;
//echo "<pre>";
//print_r($ed1);

//echo "<pre>";
//print_r($row);

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
	
	$exe = $obj->query("UPDATE register SET fname='$Fname', lname='$Lname', pstype='$Ptype', duration='$Ctime', amount='$Amount', email='$Email', education='$e', reg_date='$Rdate' where id=$id ");

	if($exe)
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
			<tr><td>First Name</td><td><input type="text" name="fname" id="fname" value="<?php echo $row->fname ?>"></td></tr>

			<tr><td>Last Name</td><td><input type="text" name="lname" id="lname" value="<?php echo $row->lname ?>" ></td></tr>

			<tr>
				<td>Pass Type</td>
				<td>
					<input type="radio" name="ptype" id="ptype" value="Ist Division" <?php if($pt == 'Ist Division') echo 'checked' ;?> >Ist Division
					<input type="radio" name="ptype" id="ptype" value="IInd Division" <?php if($pt == 'IInd Division') echo 'checked' ;?> >IInd Division
					<input type="radio" name="ptype" id="ptype" value="IIIrd Division" <?php if($pt == 'IIIrd Division') echo 'checked' ;?> >IIIrd Division
				</td>
			</tr>

			<tr><td>Duration</td>
				<td><select name="ctime" id="ctime">
					<option>Select Time</option>
					<option value="2 year" <?php if($d == '2 ') echo 'selected' ;?> >2 Year</option>
					<option value="3 year" <?php if($d == '3 ') echo 'selected' ;?> >3 Year</option>
					<option value="4 year" <?php if($d == '4 ') echo 'selected' ;?> >4 Year</option>
					<option value="5 year" <?php if($d == '5 ') echo 'selected' ;?> >5 Year</option>
				</select></td></tr>

			<tr><td>Amount</td><td><input type="text" name="amount" id="amount" value="<?php echo $row->amount ?>"></td></tr>


			<tr><td>Email</td><td><input type="email" name="email" id="email" value="<?php echo $row->email ?>"></td></tr>
			<tr><td>Education</td>
				<td>
					<input type="checkbox" name="ch[]" id="chk1" value="BSc" <?php if(in_array('BSc', $ed1)) echo 'checked' ;?>>BSc
					<input type="checkbox" name="ch[]" id="chk2" value="BTech" <?php if(in_array('BTech', $ed1)) echo 'checked' ;?>>BTech
					<input type="checkbox" name="ch[]" id="chk3" value="MBA" <?php if(in_array('MBA', $ed1)) echo 'checked' ;?>>MBA
					<input type="checkbox" name="ch[]" id="chk4" value="MTech" <?php if(in_array('MTech', $ed1)) echo 'checked' ;?>>MTech
					<input type="checkbox" name="ch[]" id="chk5" value="Medical" <?php if(in_array('Medical', $ed1)) echo 'checked' ;?>>Medical
				</td>
			</tr>
			<tr><td>Registration date</td><td><input type="text" name="rdate" id="rdate" value="<?php echo $row->reg_date ?>"></td></tr>
			
			<tr><td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Update"></td></tr>
		</table></form>
</body>
</html>