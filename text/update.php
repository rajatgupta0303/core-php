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

if($utype == 'user')
	{
	}
else
	{
		header('Location:login.php');
	}
?>

<?php

$id = $_GET['userid'];
$exe = $obj->query("select * from user where id= $id ");

$row = $exe->fetch_object();



if(isset($_POST['submit']))
{
	$name = $_POST['fname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$gender = $_POST['gen'];
	$address = $_POST['addr'];
	$postg = $_POST['postcoll'];
	$pgyear = $_POST['pgyear'];
	$pgtuni = $_POST['pgtuni'];
	$pgperc = $_POST['pgperc'];
	$gcoll = $_POST['gcoll'];
	$gyear = $_POST['gyear'];
	$guni = $_POST['guni'];
	$gprec = $_POST['gperc'];
	$imcoll = $_POST['imcoll'];
	$imyear = $_POST['imyear'];
	$imboard = $_POST['imboard'];
	$imperc = $_POST['imperc'];
	$mtcoll = $_POST['mtcoll'];
	$mtyear = $_POST['mtyear'];
	$mtboard = $_POST['mtboard'];
	$mtperc = $_POST['mtperc'];
	$wecomp = $_POST['wecomp'];
	$wetime = $_POST['wetime'];
	$weloc = $_POST['weloc'];
	$wepone = $_POST['wepone'];
	$wedone = $_POST['wedone'];
	$weptwo = $_POST['weptwo'];
	$wedtwo = $_POST['wedtwo'];
	$intncomp = $_POST['intncomp'];
	$intntime = $_POST['intntime'];
	$intnloc = $_POST['intnloc'];     
	$intnproj = $_POST['intnproj'];
	$intnprodu = $_POST['intnprodu'];
	$achiveone = $_POST['achiveone'];
	$achivetwo = $_POST['achivetwo'];
	$skillone = $_POST['skillone'];
	$skilltwo = $_POST['skilltwo'];
	$skillthr = $_POST['skillthr'];
	$hobbyone = $_POST['hobbyone'];
	$hobbytwo = $_POST['hobbytwo'];


	$exe = $obj -> query("UPDATE `user` SET `name`='$name', `email`='$email', `contact`='$contact',`gender`='$gender', `address`='$address', `pg`='$postg', `pg_year`='$pgyear', `pg_univ`='$pgtuni', `pg_perc`='$pgperc', `gradu`='$gcoll', `g_year`='$gyear', `g_univ`='$guni', `g_per`='$gprec', `inter`='$imcoll', `im_year`='$imyear', `im_board`='$imboard', `im_per`='$imperc', `metric`='$mtcoll', `m_year`='$mtyear', `m_board`='$mtboard', `m_perc`='$mtperc', `we_company`='$wecomp', `we_duration`='$wetime', `we_location`='$weloc',  `wproone`='$wepone', `wprduone`='$wedone', `wprotwo`='$weptwo', `wprdutwo`='$wedtwo' ,`intrn_company`='$intncomp', `intrn_duration`='$intntime', `intrn_location`='$intnloc',`inproject`='$intnproj', `inprodu`='$intnprodu', `achiveone`='$achiveone', `achivetwo`='$achivetwo', `skillone`='$skillone', `skilltwo`='$skilltwo', `skillthr`='$skillthr', `hobbyone`='$hobbyone', `hobbytwo`='$hobbytwo' where id= $id ");
	

	//echo $exe;
	if($exe)
	{
		
		header('Location:add.php');
	}
	else
	{
		echo "Something worng";
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Add Information </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<style>
		input{
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
	<div class="container my-5">
		<h4 class="bg-light p-2 mb-2">Add Information</h4>
		<form method="post">
			<div class="row">
			  <div class="col">
				<input type="text" class="form-control" id="fname" name="fname" placeholder="Name" value="<?php echo $row->name ?>">
			  </div>
			  <div class="col">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row->email ?>">
			  </div>
			</div>
			<div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" value="<?php echo $row->contact ?>">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="gen" name="gen" placeholder="Gender" value="<?php echo $row->gender ?>">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="addr" name="addr" placeholder="Address" value="<?php echo $row->name ?>">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="postcoll" name="postcoll" placeholder="Post Graduation" value="<?php echo $row->pg ?>">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="pgyear" name="pgyear" value="<?php echo $row->pg_year ?>" placeholder="PG Pass out Year">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="pgtuni" name="pgtuni" value="<?php echo $row->pg_univ ?>" placeholder="PG University">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="pgperc" name="pgperc" value="<?php echo $row->pg_perc ?>" placeholder="PG Percentage">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="gcoll" name="gcoll" value="<?php echo $row->gradu ?>" placeholder="Graduation">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="gyear" name="gyear" value="<?php echo $row->g_year ?>" placeholder="Graduation Pass out Year">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="guni" name="guni" value="<?php echo $row->g_univ ?>" placeholder="Graduation University">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="gperc" name="gperc" value="<?php echo $row->g_per ?>" placeholder="Graduation Percentage">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="imcoll" name="imcoll" value="<?php echo $row->inter ?>" placeholder="12th ">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="imyear" name="imyear" value="<?php echo $row->im_year ?>" placeholder="12th Pass out Year">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="imboard" name="imboard" value="<?php echo $row->im_board ?>" placeholder="12th Board">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" placeholder="12th Percentage" id="imperc" name="imperc" value="<?php echo $row->im_year ?>">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="mtcoll" name="mtcoll" value="<?php echo $row->metric ?>" placeholder="10th ">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="mtyear" name="mtyear" value="<?php echo $row->m_year ?>" placeholder="10th Pass out Year">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="mtboard" name="mtboard" value="<?php echo $row->m_board ?>" placeholder="10th Board">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="mtperc" name="mtperc" value="<?php echo $row->m_perc ?>" placeholder="10th Percentage">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="wecomp" name="wecomp" value="<?php echo $row->we_company ?>"placeholder="Work Experiance Company">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="wetime" name="wetime" value="<?php echo $row->we_duration ?>" placeholder="Work Experiance Time">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="weloc" name="weloc" value="<?php echo $row->we_location ?>" placeholder="Work Experiance Location">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="wepone" name="wepone" value="<?php echo $row->wproone ?>" placeholder="Work Project One">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="wedone" name="wedone" value="<?php echo $row->wprduone ?>" placeholder="First Project Duration">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="weptwo" name="weptwo" value="<?php echo $row->wprotwo ?>" placeholder="Work Project two">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="wedtwo" name="wedtwo" value="<?php echo $row->wprdutwo ?>" placeholder="Second Project Duration">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="intncomp" name="intncomp" value="<?php echo $row->intrn_company ?>" placeholder="Internship Company">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="intntime" name="intntime" value="<?php echo $row->intrn_duration ?>" placeholder=" Internship Time">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control"  id="intnloc" name="intnloc" value="<?php echo $row->intrn_location ?>" placeholder="Internship Location">
				</div>
				<div class="col">
				  <input type="text" class="form-control"  id="intnproj" name="intnproj" value="<?php echo $row->inproject ?>" placeholder="Internship Project">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control"  id="intnprodu" name="intnprodu" value="<?php echo $row->inprodu ?>" placeholder="Internship Project Duration">
				</div>
				<div class="col">
				  <input type="text" class="form-control"  id="achiveone" name="achiveone" value="<?php echo $row->achiveone ?>" placeholder="Your Achivemen ">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="achivetwo" name="achivetwo" value="<?php echo $row->achivetwo ?>" placeholder="Your Achivement">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="skillone" name="skillone" value="<?php echo $row->skillone ?>" placeholder="First Skills">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="skilltwo" name="skilltwo" value="<?php echo $row->skilltwo ?>"placeholder="Second Skills">
				</div>
				<div class="col">
				  <input type="text" class="form-control" id="skillthr" name="skillthr" value="<?php echo $row->skillthr ?>" placeholder="Third Skills">
				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="hobbyone" name="hobbyone" value="<?php echo $row->hobbyone ?>" placeholder="Your Hobbies">
				</div>
				<div class="col">
				 <input type="text" class="form-control" id="hobbytwo" name="hobbytwo" value="<?php echo $row->hobbytwo ?>" placeholder="Your Hobbies">
				</div>
			  </div>
			  <button type="submit" class="btn btn-primary" name="submit" id="submit">Add Data</button>
		  </form>

	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
