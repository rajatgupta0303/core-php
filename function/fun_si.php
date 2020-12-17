<?php

function si($amu, $rate, $time)
{
	$sum = ($amu*$rate*$time)/100;	
	echo $sum;
}

si(5,10,20);

?>