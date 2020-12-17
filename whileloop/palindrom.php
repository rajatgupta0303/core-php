<?php

$a = 121;
$sum=0;
$num = $a;
while($num > 0 )
{

$return = $num%10;
//echo $return;
$sum = (10*$sum)+$return;
//echo $sum;
$num= intval($num/10);
//echo $num;
  
}

if($a == $sum)
{
	echo "number is palindrom";
}
else
{
	echo "number is not palindrom";
}
?>