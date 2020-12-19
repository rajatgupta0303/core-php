<?php

function revss($n)
{
	$sum =0;
	while($n>0)
	{
		$res = $n%10;
		//   1). 3    2). 2   3).  1
		$sum = ($sum*10)+$res;
		//  1). 3     2). 3*10+2 =32    3).    320+1= 321
		$n = intval($n/10);
		//   1). 12     2). 1      3). 0
	}
	echo $sum;
}
revss(123);
?>
