<?php

include 'conn.php';

$exe = $obj->query("select * from admision ");
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
				<th> name</th>
				<th>rollno</th>
				<th>degree</th>
				<th>collage</th>
				<th>city </th>
				<th>email </th>
				<th>gender</th>
				<th>contact</th>
				<th>address</th>
				<th>collage_type</th>
				<th>sub_date</th>
				<th>Action</th>
			</tr>
			<?php

			while($row = $exe->fetch_object())
			{
				?>
				<tr>
					<td><?php echo $row->id ;?></td>
					<td><?php echo $row->name ;?></td>
					<td><?php echo $row->rollno ;?></td>
					<td><?php echo $row->degree ;?></td>
					<td><?php echo $row->collage ;?></td>
					<td><?php echo $row->city ;?></td>
					<td><?php echo $row->email ;?></td>
					<td><?php echo $row->gender ;?></td>
					<td><?php echo $row->contact ;?></td>
					<td><?php echo $row->address ;?></td>
					<td><?php echo $row->collage_type ;?></td>
					<td><?php echo $row->sub_date ;?></td>
					<td><a href="delete.php?delid=<?php echo $row->id ;?>">Delete</a> || <a href="update.php?upid=<?php echo $row->id ;?>">Update</a></td>
					<?php
			}
			?>

		</table>
</body>
</html>
