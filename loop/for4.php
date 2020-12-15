<?php 
$mul=1;
for($a=1; $a<=15; $a++)
{
	if($a%2!=0)
	{
		echo "$a <br/>";
		$mul =$a*$mul;

	}
}
echo "Total Multiplication : $mul ";

?>