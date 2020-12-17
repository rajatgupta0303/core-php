<?php

$a = 4567;
$sum=0;

while($a > 0 )
{

$return = $a%10;
$sum = (10*$sum)+$return;
$a= intval($a/10);

  
}

echo "$sum";
?>