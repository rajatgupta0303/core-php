<?php
if(isset($_POST['add']))
{

	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];

	$add = $num1+$num2; 
}
elseif(isset($_POST['sub']))
{
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];

	$sub = $num1-$num2; 
}
elseif(isset($_POST['mul']))
{
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];

	$mul = $num1*$num2; 
}
elseif(isset($_POST['div']))
{
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];

	$div = $num1/$num2; 
}
else
{

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculater</title>
</head>
<body>
	<form method="POST">
		<h3>Simple Calculater</h3>
		<table border="1" cellpadding="10px" cellspacing="0px">
			<tr>
				<td>Enter Number 1 :</td>
				<td colspan="3"><input type="number" id="num1" name="num1"></td>
			</tr>
			<tr>
				<td>Enter Number 2 :</td>
				<td colspan="3"><input type="number" id="num2" name="num2"></td>
			</tr>
			
			<tr>
				<td >
					<button name="add" id="add">ADD</button>
				</td>
				<td >
					<button name="sub" id="sub">SUB</button>
				</td>
				<td >
					<button name="mul" id="mul">MUL</button>
				</td>
				<td >
					<button name="div" id="div">DIV</button>
				</td>
				
				
			</tr>
		</table>
	</form>
	<br/>
     <table>
     	<tr>
     		<td><b>Your Answer is :</b>  </td>
     		<td><b><?php if(isset($_POST['add'])) echo $add ?></b></td>
			<td><b><?php if(isset($_POST['sub'])) echo $sub; ?></b></td>
			<td><b><?php if(isset($_POST['mul'])) echo $mul; ?></b></td>
			<td><b><?php if(isset($_POST['div'])) echo $div; ?></b></td>
     	</tr>
     </table>
</body>
</html>