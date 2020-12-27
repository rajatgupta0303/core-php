<html>
<head>
</head>
<body>
<table>
<th>English</th>
	<th>Hindi</th>
	<th>Math</th>
	<th>Science</th>
	<th>Computer</th>	


<?php

// show data in table form

$subject = array(

							"a" => array(

											"English" =>"90",
											"Hindi" =>"85",
											"Math" =>"80",
											"Science" =>"75",
											"Computer" =>"70"
										),

							"b" => array(

											"English" =>"85",
											"Hindi" =>"80",
											"Math" =>"75",
											"Science" =>"70",
											"Computer" =>"90"
										),

							"c" => array(

											"English" =>"80",
											"Hindi" =>"75",
											"Math" =>"70",
											"Science" =>"90",
											"Computer" =>"88"
										),

							"d" => array(

											"English" =>"70",
											"Hindi" =>"75",
											"Math" =>"80",
											"Science" =>"85",
											"Computer" =>"90"
										)





			);

foreach($subject as $data)
{
?> <tr>
	<td><?php print_r($data["English"]) ;?> </td>
	<td><?php print_r($data["Hindi"]);?> </td>
		<td><?php print_r($data["Math"]);?> </td>
			<td><?php print_r($data["Science"]);?> </td>
			<td><?php print_r($data["Computer"]); echo "<br>";?> </td></tr>


<?php
}
?>
</table>
</body>
</html>