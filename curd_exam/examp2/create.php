<?php

include 'conn.php';

if(isset($_POST['submit']))
{
	$Pname = $_POST['name'];
	$Desc = $_POST['description'];
	$Stock = $_POST['stock'];
	$Company = $_POST['company'];
	$Psize = $_POST['ch'];

	$ps = implode(', ', $Psize);

	$exe = $obj->query("insert into orders(pname,discription,stock,company,psize)values('$Pname','$Desc','$Stock','$Company','$ps');");

	if($exe)
	{
			echo "tes";
	}
	else{
		echo "ni";
}}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create examp 2</title>
</head>
<body>
	<form method="post">
	<table border="1" align="center" cellspacing="0" cellpadding="10">
		<tr>
			<td>Product name</td>
			<td><input type="text" name="name" id="name"></input></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><textarea name="description" id="description"></textarea></td>
		</tr>
		<tr>
			<td>Stock</td>
			<td><input type="radio" name="stock" id="stock" value="Yes">Yes
				<input type="radio" name="stock" id="stock" value="No">No
			</td>
		</tr>
		<tr>
			<td>Company</td>
			<td><select name="company" id="company">
				<option>Select Company</option>
				<option value="COCO">Coco</option>
				<option value="Sprit">Sprit</option>
				<option value="Fanta">Fanta</option>
				<option value="Limca">Limca</option>
			</select></td>
		</tr>
		<tr>
			<td>Size</td>
			<td><input type="checkbox" name="ch[]" id="chk1" value="300ml">300ml
				<input type="checkbox" name="ch[]" id="chk2" value="500ml">500ml
				<input type="checkbox" name="ch[]" id="chk3" value="1L">1L
				<input type="checkbox" name="ch[]" id="chk4" value="2L">2L
			</td>
		</tr>
		<tr>
			
			<td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit"></td>
		</tr>
	</table>
</form>
</body>
</html>


