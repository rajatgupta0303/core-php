<?php

//		sort
//		ksort
//		asort
//		rsort
//		arsort
//		krsort

$cars=array("Volvo","BMW","Toyota");
sort($cars);
echo "<br>";

$numbers=array(4,6,2,22,11);
sort($numbers);
echo "<br>";
///////////////
$cars=array("Volvo","BMW","Toyota");
rsort($cars);

echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);


echo "<br>";

krsort($age);



echo "<br>";
asort($age);


echo "<br>";

arsort($age);
?>