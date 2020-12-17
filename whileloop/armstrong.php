<?php

//123 = 1+8+27= 36
//153 = 1+125+27= 153
$sum = 0;
$a = 123;
$num = $a;
while($num> 0)
{
	$return = $num%10;                            //3         2
	//echo $return;
	$sum = $sum + ($return*$return*$return);     //27            27+125=152      27+8+1
	//echo $sum;
	$num = intval($num/10);      				 //12             1
	//echo $num;
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