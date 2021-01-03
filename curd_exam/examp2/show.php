<?php

include 'conn.php';

$exe = $obj->query("select * from orders ");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Show data examp2</title>
</head>
<body>
		<table border="1" align="center" cellspacing="0" cellpadding="10">
			<tr>
				<th>ID</th>
				<th>Product name</th>
				<th>Description</th>
				<th>Stock</th>
				<th>Company</th>
				<th>Product Size</th>
				<th>Action</th>
			</tr>
			<?php

			while($row = $exe->fetch_object())
			{
				?>
				<tr>
					<td><?php echo $row->id ;?></td>
					<td><?php echo $row->pname ;?></td>
					<td><?php echo $row->discription ;?></td>
					<td><?php echo $row->stock ;?></td>
					<td><?php echo $row->company ;?></td>
					<td><?php echo $row->psize ;?></td>
					<td><a href="delete.php?delid=<?php echo $row->id ;?>">Delete</a> || <a href="update.php?upid=<?php echo $row->id ;?>">Update</a></td>
					<?php
			}
			?>

		</table>
</body>
</html>
