<?php

function palin($n)
{
	$sum=0;
	
	$num = $n;
	while($num > 0)
	{
		$rev = $num%10;
		
		$sum = ($sum*10) + $rev;
		
		$num = intval($num/10);
		
	}

if($sum == $n)
{
	echo "number is armstrong";
}
else
{
	echo "comman number";
}

}



palin(1451);

?>