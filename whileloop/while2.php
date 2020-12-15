<?php

$a = 66;
$sum=1;
while($a!=0)
{
	$return= $a%10;  
	$sum = $sum*$return;  
	$a = $a/10;       
}
 echo "$sum";
?>