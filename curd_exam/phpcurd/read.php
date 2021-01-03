<?php

$obj = new mysqli("localhost","root","","testcurd");

$errno= $obj->connect_errno;
if($errno!=0)
{
  echo $obj->connect_error;
  exit;
}

$result = $obj->query("select * from user");

//$row = $result->fetch_object();
?>

<table border="1" align="center" cellspacing="0" cellpadding="10">
	<tr>
		<td>ID</td>
		<td>NAME</td>
		<td>EMAIL</td>
		<td>CONTACT</td>
		<td>ACTION</td>
	</tr>

	<?php

	while($row = $result->fetch_object())
		{
	?>
		<tr>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->name; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->contact; ?></td>
			<td><a href="delete.php?delid= <?php echo $row->id; ?>">Delete</a> /
				<a href="update.php?upid= <?php echo $row->id; ?>"">Update</a></td>
		</tr>
	<?php
		}
	?>
</table>