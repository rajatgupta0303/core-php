<?php

function palin($n)
{
	$sum=0;
	
	while($n > 0)
	{
		$rev = $n%10;
		
		$sum = $sum + ($rev*$rev*$rev);
		
		$n = intval($n/10);
		
	}

echo "$sum";


}



palin(45);

?>