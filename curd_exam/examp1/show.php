<?php

include "conn.php";

$result = $obj->query("select * from exap");


?>

<!DOCTYPE html>
<html>
<head>
	<title>Show data</title>
</head>
<body>
		<table align="center" cellpadding="10" cellspacing="0" border="1">
			<h3 align="center">Data List</h3>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Address</th>
				<th>City</th>
				<th>Gender</th>
				<th>Hobbies</th>
				<th>Action</th></tr>
			

			<?php
				while($row = $result->fetch_object())
				{
			?>
			<tr>
			<td><?php echo $row->id;?></td>
			<td><?php echo $row->name;?></td>
			<td><?php echo $row->address;?></td>
			<td><?php echo $row->city;?></td>
			<td><?php echo $row->gender;?></td>
			<td><?php echo $row->hobby;?></td>
			<td><a href="delete.php?delid= <?php echo $row->id;?> ">Delete</a> || <a href="update.php?upid= <?php echo $row->id;?>">Update</a></td>

			

			<?php } ?>

</tr>
		</table>
</body>
</html>