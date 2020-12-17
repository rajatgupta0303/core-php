<?php
/*
$a = 123;
$sum=0;
while($a>0)
{
	$return= $a%10;  //  2
	$sum = $sum+$return;  // 2
	$a = intval($a/10);       //  1
}
 echo "$sum";*/
?>


<?php
/*
$a = 22;
$sum=0;
while($a>0)
{
	$return= $a%10;  
	$sum = $sum+($return*$return);  
	$a = intval($a/10);      
}
 echo "$sum";*/
?>

<?php

$a = 22;
$sum=0;
while($a>0)
{
	$return= $a%10;  
	$sum = $sum+($return*$return*$return);  
	$a = intval($a/10);      
}
 echo "$sum"; 
?>