<?php

//123 = 1+8+27= 36
//153 = 1+125+27= 153
$sum = 0;
$a = 123;
$num = $a;
while($num!= 0)
{
	$return = $num%10;                            //123-3     12- 2     1-1
	$sum = $sum + ($return*$return*$return);     //27            20+8      27+8+1
	$num = $num/10;      						   //12             1
}            

	if($a == $sum)
	{
		echo "number is armstromong";
	}  
	else
	{
		echo "number is not armstromong";
	}                                

?>