<?php

include 'conn.php';

$id = $_GET['upid'];
$result = $obj->query("select * from orders where id= $id");
$row = $result->fetch_object();
$s = $row->stock;
$c = $row->company;
$p = $row->psize;
$p1 = explode(', ' , $p );

//echo $s;
//echo $c;
echo "<pre>";
print_r($p1);

if(isset($_POST['submit']))
{
	$Pname = $_POST['name'];
	$Desc = $_POST['description'];
	$Stock = $_POST['stock'];
	$Company = $_POST['company'];
	$Psize = $_POST['ch'];

	$ps = implode(', ', $Psize);

	$exe = $obj->query("update orders set pname='$Pname',discription='$Desc', stock='$Stock', company='$Company', psize='$ps' where id = $id ");

	if($exe)
	{
			header('location:show.php');
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
	<table border="1" align="center" cellspacing="1" cellpadding="10">
		<tr>
			<td>Product name</td>
			<td><input type="text" name="name" id="name" value="<?php echo $row->pname ?>"></input></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><textarea name="description" id="description"><?php echo $row->discription ?></textarea></td>
		</tr>
		<tr>
			<td>Stock</td>
			<td><input type="radio" name="stock" id="stock" value="Yes" <?php if($s == 'Yes') echo 'checked'; ?>>Yes
				<input type="radio" name="stock" id="stock" value="No" <?php if($s == 'No') echo 'checked'; ?>>No
			</td>
		</tr>
		<tr>
			<td>Company</td>
			<td><select name="company" id="company">
				<option>Select Company</option>
				<option value="COCO" <?php if($c == 'COCO') echo 'selected'; ?>>Coco</option>
				<option value="Sprit" <?php if($c == 'Sprit') echo 'selected'; ?>>Sprit</option>
				<option value="Fanta" <?php if($c == 'Fanta') echo 'selected'; ?>>Fanta</option>
				<option value="Limca" <?php if($c == 'Limca') echo 'selected'; ?>>Limca</option>
			</select></td>
		</tr>
		<tr>
			<td>Size</td>
			<td><input type="checkbox" id="chk1" name="ch[]" value="300ml" 
				<?php if(in_array("300ml", $p1 )) {echo 'checked ';}?>>300ml
				<input type="checkbox" id="chk2" name="ch[]" value="500ml" 
				<?php if(in_array("500ml", $p1 )) {echo 'checked ';} ?>>500ml
				<input type="checkbox" id="chk3" name="ch[]" value="1L" 
				<?php if(in_array("1L", $p1 )) {echo 'checked ';}?> >1L
				<input type="checkbox" id="chk4" name="ch[]" value="2L" 
				<?php if(in_array("2L", $p1 )) {echo 'checked ';}?> >2L
			</td>              
		<tr>
			
			<td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Update"></td>
		</tr>
	</table>
</form>
</body>
</html>


