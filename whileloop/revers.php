<?php

$a = 123;
$sum=0;

while($a >1 )
{

$return = $a%10;
$sum = (10*$sum)+$return;
$a= $a/10;

  
}

echo "$sum";
?>