<?php

$mydate = "12th september 2015";
$utime = strtotime($mydate);
//echo $utime;
echo date("y-m-d", $utime);
echo "<br>";
echo date("Y-m-d", $utime);
echo "<br>";


$mydate = "15:10:25";
$utim = strtotime($mydate);
echo date("h:i:s A", $utim);
?>