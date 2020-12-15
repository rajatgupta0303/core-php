<?php

$a = 125;
$sum=0;
$num = $a;
while($num > 1 )
{

$return = $num%10;
$sum = (10*$sum)+$return;
$num= $num/10;

  
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