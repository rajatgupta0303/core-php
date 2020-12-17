<?php

function revs($n)
{
	$sum =0;
	while($n>0)
	{
		$res = $n%10;
		$sum = ($sum*10)+$res;
		$num = intval($n/10);
	}
	echo $sum;
}
revs(123);
?>
