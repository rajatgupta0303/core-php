<?php

function nsum($num)
{
	$sum = 1;
	for($a=1;$a<=$num; $a++)
	{
		$sum = $sum*$a;
	}
	echo $sum;
}

nsum(5);
?>