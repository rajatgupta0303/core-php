<?php

$a = 66;
$sum=1;
/*
while($a>0)
{
	$return= $a%10; 
	//echo $return;
	$sum = $sum*$return; 
	//echo $sum; 
	$a = intval($a/10);       
	//echo "$a<br/>";
	
}
 echo "$sum";

while($a>0)
{
	$return= $a%10; 
	//echo $return;
	$sum = $sum*($return*$return); 
	//echo $sum; 
	$a = intval($a/10);       
	//echo "$a<br/>";
	
}
 echo "$sum"; */

 while($a>0)
{
	$return= $a%10; 
	//echo $return;
	$sum = $sum*($return*$return*$return); 
	//echo $sum; 
	$a = intval($a/10);       
	//echo "$a<br/>";
	
}
 echo "$sum";

?>