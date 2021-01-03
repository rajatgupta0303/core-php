<?php

$obj = new mysqli("localhost","root","","pupro");

$errno = $obj->connect_error;

if($errno!=0)
{
	echo $obj->connect_error;
	exit;
}

session_start();
$a_id = $_SESSION['id'];

$utype = $_SESSION['type'];
//echo $a_id;
//echo $utype;

if($utype == 'admin' || $utype == 'user')
	{
	}
else
	{
		header('Location:login.php');
	}

$id = $_GET['showid'];
$exe = $obj->query("select * from user where id= $id ");

$row = $exe->fetch_object();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Show User List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<style>
		h5{
		            background-color: cornflowerblue;
		            padding: 8px;
		            margin: 0;
		            color: #fff;
		        }
		        span{
		            font-weight: 600;
		        }
	</style>
</head>

<body>
	<div class="container">
		<div class="d-flex justify-content-between mt-4">
			<div>
<!-- 				<img src="https://cdn.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="profile" class="img-thumbnail" width="150"> -->
				<div style="float: right; padding: 15px"> <span>Name: <?php echo $row->name; ?></span>
					<br> <span>Email: <?php echo $row->email; ?></span>
					<br> <span>Phone: <?php echo $row->contact; ?></span>
					<br>
				</div>
			</div>
			<div>
				<img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/IMI_Bhubaneswar_Logo.png" class="img-fluid p-2" alt="Responsive image">
			</div>
		</div>
		<div style="border: 1px solid #ccc; margin: 20px 0; border-radius: 5px;">
			<h5>ACADEMIC QUALIFICATIONS</h5>
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col">Degree</th>
						<th scope="col">Year</th>
						<th scope="col">Board/University</th>
						<th scope="col">Cgpa/Percentage</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><?php echo $row->pg; ?></th>
						<td><?php echo $row->pg_year; ?></td>
						<td><?php echo $row->pg_univ; ?></td>
						<td><?php echo $row->pg_perc; ?></td>
					</tr>
					<tr>
						<th scope="row"><?php echo $row->gradu; ?></th>
						<td><?php echo $row->g_year; ?></td>
						<td><?php echo $row->g_univ; ?></td>
						<td><?php echo $row->g_per; ?></td>
					</tr>
					<tr>
						<th scope="row"><?php echo $row->inter; ?></th>
						<td><?php echo $row->im_year; ?></td>
						<td><?php echo $row->im_board; ?></td>
						<td><?php echo $row->im_per; ?></td>
					</tr>
					<tr>
						<th scope="row"><?php echo $row->metric; ?></th>
						<td><?php echo $row->m_year; ?></td>
						<td><?php echo $row->m_board; ?></td>
						<td><?php echo $row->m_perc; ?></td>
					</tr>
				</tbody>
			</table>
			<h5>WORK EXPERIENCE</h5>
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col"><?php echo $row->we_company; ?></th>
						<th scope="col"><?php echo $row->we_duration; ?></th>
						<th colspan="2" scope="col"><?php echo $row->we_location; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Project</th>
						<td>
							<ul>
								<li><?php echo $row->wproone; ?></li>
								<li><?php echo $row->wprotwo; ?></li>
							</ul>
						</td>
						<td>
							<ul>
								<li><?php echo $row->wprduone; ?></li>
								<li><?php echo $row->wprdutwo; ?></li>
							</ul>
						</td>
					</tr>
					<tr>
						<th scope="row"></th>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<h5>INTERNSHIP</h5>
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col"><?php echo $row->intrn_company; ?>, <?php echo $row->intrn_duration; ?></th>
						<th colspan="2" scope="col"><?php echo $row->intrn_location; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Project</th>
						<td>
							<ul>
								<li><?php echo $row->inproject; ?></li>
							</ul>
						</td>
						<td>
							<ul>
								<li><?php echo $row->inprodu; ?></li>
							</ul>
						</td>
					</tr>
					<tr>
						<th scope="row"></th>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<!-- <h5>POSITION OF RESPONSIBILITY</h5>
			<table class="table">
				<tbody>
					<tr>
						<td> <strong>PLACE/ORGANISATION</strong>
						</td>
						<td>
							<ul>
								<li>Position
									<br>Work done</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td> <strong>PLACE/ORGANISATION</strong>
						</td>
						<td>
							<ul>
								<li>Position
									<br>Work done</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table> -->
			<h5>ACHIEVEMENTS</h5>
			<table class="table">
				<tbody>
					<tr>
						<td> <strong>ACADEMIC</strong>
						</td>
						<td>
							<ul>
								<li><?php echo $row->achiveone; ?></li>
							</ul>
						</td>
					</tr>
					<tr>
						<td> <strong>EXTRA CIRCULAR</strong>
						</td>
						<td>
							<ul>
								<li><?php echo $row->achivetwo; ?></li>
							</ul>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<h5>SKILLS</h5>
			<table class="table">
				<tbody>
					<tr>
						<td> <strong>TECHNICAL</strong>
						</td>
						<td>
							<ul>
								<li><?php echo $row->skillone; ?></li>
								<li><?php echo $row->skilltwo; ?></li>
							</ul>
						</td>
					</tr>
					<tr>
						<td> <strong>OTHER</strong>
						</td>
						<td>
							<ul>
								<li><?php echo $row->skillthr; ?></li>
							</ul>
						</td>
					</tr>
					<tr>
						
					</tr>
				</tbody>
			</table>
			<h5>HOBBIES/INTERESTS</h5>
			<table class="table">
				<tbody>
					<tr>
						<td>
							<ul>
								<li><?php echo $row->hobbyone; ?></li>
								<li><?php echo $row->hobbytwo; ?></li>
							</ul>
						</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>