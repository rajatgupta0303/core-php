<?php
// mktime function  ==  mktime(hour, minute, second, month, day, year, is_dst)


$mydate = "12th september 2015";
$utx = mktime(0,0,0,9,12,2015);
//echo $utime;
echo date("y-m-d", $utx);
echo "<br>";
echo date("y/m/d", $utx);
echo "<br>";

// current date print karvani hai


$utxx = mktime(0,0,0,date('m'),date('d'),date('Y'));
//echo $utime;
echo date("Y-m-d", $utxx);
echo "<br>";
$utxx = mktime(0,0,0,date('m'),date('d')+7,date('Y'));
//echo $utime;
echo date("Y-m-d", $utxx);

echo "<br>";
$utxx = mktime(0,0,0,date('m'),date('d')-10,date('Y'));
//echo $utime;
echo date("Y-m-d", $utxx);
?>