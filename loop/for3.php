<?php 
$sum=0;
for($a=2; $a<=25; $a++)
{
	if($a%5==0)
	{
		echo "$a <br/>";
		$sum  += $a;
		

	}
}
echo "Total Addition : $sum <br/>";
?>