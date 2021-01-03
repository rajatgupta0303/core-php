<?php
include 'conn.php';

	$result = $obj->query("select * from register");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Show register data</title>
</head>
<body>
		<table border="1" align="center" cellspacing="0" cellpadding="10">
			<tr>
				<th>Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Paasing Type</th>
				<th>Duration</th>
				<th>Amount</th>
				<th>Email</th>
				<th>Education</th>
				<th>Date</th>
				<th>Action</th>

			</tr>
			<?php
				while($row= $result->fetch_object()){
			?>
			<tr>
				<td><?php echo $row->fname;?></td>
				<td><?php echo $row->lname;?></td>
				<td><?php echo $row->pstype;?></td>
				<td><?php echo $row->duration;?></td>
				<td><?php echo $row->amount;?></td>
				<td><?php echo $row->email;?></td>
				<td><?php echo $row->education;?></td>
				<td><?php echo $row->reg_date;?></td>
				<td><?php echo $row->fname;?></td>
				<td><a href="delete.php?delid=<?php echo $row->id;?>">Delete</a> || <a href="update.php?upid=<?php echo $row->id;?>">Update</a></td>
			</tr>
			<?php } ?>
		</table>
</body>
</html>