<?php

include "conn.php";

$id = $_GET['upid'];
//echo $id;
//die("y");
$result = $obj->query("select * from exap where id= $id");
$row= $result->fetch_object();

 $c=$row->city;
 //echo "$c<br/>";
 $g=$row->gender;
 //echo "$g<br/>";
 $h=$row->hobby;
 $h1 = explode(' , ', $h);

 

 //echo "<pre>";
 //print_r($h1);

 //echo "<pre>";
 //print_r($row);

if(isset($_POST['submit']))
{
	$Name = $_POST['name'];
	$Address = $_POST['address'];
	$City = $_POST['city'];
	$Gender = $_POST['gender'];
	
	$hob = $_POST['chk'];
	$hobby = implode(' , ', $hob); 

	$exe = $obj -> query("update exap set name='$Name', address='$Address', city='$City', gender='$Gender', hobby='$hobby' where id = $id");

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
			<td><input type="text" name="name" id="name" value="<?php echo $row->name ;?>"></input></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name="address" id="address"><?php echo $row->address ;?></textarea></td>
		</tr>
		<tr>
			<td>City</td>
			<td><select name="city" id="city">
				<option>Select City</option>
				<option value="kann" <?php if($c=='kan') {echo 'selected';}?>>Kanpur </option>
				<option value="kann" <?php if($c=='kann') {echo 'selected';}?>>Kannauj</option>
				<option value="agra" <?php if($c=='agra') {echo 'selected';}?>>Agra</option>
				<option value="lick" <?php if($c=='lick') {echo 'selected';}?>>Lucknow</option>
			</select></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" id="gender" value="male" <?php if($g=='male') {echo 'checked ';}?>></input>Male
				<input type="radio" name="gender" id="gender" value="female" <?php if($g=='female') {echo 'checked ';}?>></input>Femaale
			</td>
		</tr>

		<tr>
			<td>Hobbies</td>
				<td>
				<input type="checkbox" id="chk1" name="chk[]" value="play" 
				<?php if(in_array("play", $h1)) {echo 'checked ';}?>>Playing
				<input type="checkbox" id="chk2" name="chk[]" value="swwim" 
				<?php if(in_array("swwim", $h1)) {echo 'checked ';}?>>Swwiming
				<input type="checkbox" id="chk3" name="chk[]" value="read" 
				<?php if(in_array("read", $h1)) {echo 'checked ';}?>>Reading
				<input type="checkbox" id="chk4" name="chk[]" value="chess" 
				<?php if(in_array("chess", $h1)) {echo 'checked ';}?>>Chess
			</td>
		</tr>
		<tr>
			
			<td colspan="2" align="center"><input type="submit" name="submit" value="Update"></input></td>
		</tr>
	</table>
	</form>
</body>
</html>