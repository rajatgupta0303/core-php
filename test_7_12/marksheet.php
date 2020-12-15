<?php

$hindi = 35;
$english = 70;
$math = 35;
$scince = 55;
$computer = 50;

$sub_sum = $hindi + $english + $math + $scince + $computer;
$percentage = $sub_sum/5;
echo "Total number of marks to all subject = $sub_sum <br>";
echo "Total Percentage = $percentage <br>";

/*if($percentage > 35)
{
	echo "Yor are paas";
}
else
{
	echo "You are failed";
}
*/

if(($percentage > 35) && ($percentage < 50))
{
	echo "Yor are paas With D Grade";
}
elseif(($percentage >= 50) && ($percentage < 65))
{
	echo "Yor are paas With C Grade";
}
elseif(($percentage >= 65) && ($percentage < 75))
{
	echo "Yor are paas With B Grade";
}
else
{
	echo "Yor are paas With A grade and Distanct Marksheet";
}

?>