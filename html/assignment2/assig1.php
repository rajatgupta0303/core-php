
<?php

if(isset($_POST['submit']))
{
	$comname = $_POST['comname'];
	$empname = $_POST['empname'];
	$desi = $_POST['desi'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$contact = $_POST['contact'];
	$bsalary = $_POST['bsalary'];
	$ta = $_POST['ta'];
	$hra = $_POST['hra'];
	$da = $_POST['da'];
	$leave = $_POST['leave'];
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee Salary Slip</title>
</head>
<body>
	<form method="POST">
		<h3>Employee Salary Slip</h3>
		<table border="1" cellpadding="10px" cellspacing="0px" align="left">
			<tr>
				<td>Company Name :</td>
				<td><input type="text" id="comname" name="comname"></td>
			</tr>
			<tr>
				<td>Employee Name :</td>
				<td><input type="text" id="empname" name="empname"></td>
			</tr>
			<tr>
				<td>Employee Code :</td>
				<td><input type="text" id="empcode" name="empcode"></td>
			</tr>
			<tr>
				<td>Designation :</td>
				<td>
					<select id="desi" name="desi">
						<option value=""> Select Designation</option>
						<option value="PM">PM</option>
						<option value="TL">TL</option>
						<option value="Developer">Developer</option>
						<option value="Designer">Designer</option>
						<option value="Tester">Tester</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>Month :</td>
				<td>
					<select id="month" name="month">
						<option value="">Select Month</option>
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Year :</td>
				<td>
					<select id="year" name="year">
						<option value="">Select Year</option>
						<option value="2020">2020</option>
						<option value="2019">2019</option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
						<option value="2014">2014</option>
						<option value="2013">2013</option>
						<option value="2012">2012</option>
						<option value="2011">2011</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Basic Salary :</td>
				<td><input type="text" id="bsalary" name="bsalary"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="email" id="email" name="email"></td>
			</tr>
			<tr>
				<td>Contact :</td>
				<td><input type="text" id="contact" name="contact"></td>
			</tr>
			<tr>
				<td>TA :</td>
				<td><input type="number" id="ta" name="ta"></td>
			</tr>
			<tr>
				<td>HRA :</td>
				<td><input type="text" id="hra" name="hra"></td>
			</tr>
			<tr>
				<td>DA :</td>
				<td><input type="text" id="da" name="da"></td>
			</tr>
			<tr>
				<td>Leave :</td>
				<td><input type="text" id="leave" name="leave"></td>
			</tr>
			
					
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="Submit"></td>
				
			</tr>
		</table>
	</form>

			<table border="1" cellpadding="10px" cellspacing="0px" align="center">
				<tr><td colspan="2"><h3>Employee Salary Detail</h3></td></tr>
			<tr>
				
				<td align="center" colspan="2">
					<?php if(isset($_POST['submit'])) echo $comname; ?>
				</td>
			</tr>
			<tr><td><?php if(isset($_POST['submit'])) echo $empname; ?></td>
				<td><?php if(isset($_POST['submit'])) echo $empname; ?></td>
			</tr>
			<tr>
				<td><?php if(isset($_POST['submit'])) echo $desi; ?></td>
				<td><?php if(isset($_POST['submit'])) echo $contact; ?></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><?php if(isset($_POST['submit'])) echo $month; ?> - <?php if(isset($_POST['submit'])) echo $year; ?></td>
			</tr>
			<tr>
				<td>Basic Salary :</td>
				<td><?php if(isset($_POST['submit'])) echo $bsalary; ?></td>
			</tr>
			
			<tr>
				<td>TA :</td>
				<td><?php if(isset($_POST['submit'])) {
					$ta = $ta*300; echo $ta;} ?></td>
			</tr>
			<tr>
				<td>DA :</td>
				<td><?php if(isset($_POST['submit'])) {
					$da = $da*200; echo $da;} ?></td>
			</tr>
			<tr>
				<td>HRA :</td>
				<td><?php if(isset($_POST['submit'])) { $hra = $hra*500;
					echo $hra; }?></td>
			</tr>
			<tr>
				<td>Leave :</td>
				<td><?php if(isset($_POST['submit'])) { $leave = $leave*1000; echo $leave;} ?></td>
			</tr>
			<tr>
				<td>Total Deduction :</td>
				<td><?php if(isset($_POST['submit'])) echo $leave; ?></td>
			</tr>
			<tr>
				<td>Net Amount :</td>
				<td> <?php if(isset($_POST['submit'])){ $total_amount= ($ta+$da+$hra+$bsalary)-($leave);
				echo $total_amount;}?></td>
			</tr>
			<!--  -->
		</table>
		</tr>
	</table>
</body>
</html>