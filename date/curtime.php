<?php
// current date deta hai

$currentfun = date("y-m-d");
echo $currentfun;
echo "<br>";


// timezone = Asia/kolkata
date_default_timezone_set('Asia/kolkata');
$currenttime= date("h:i:s A");
echo $currenttime;
echo "<br>";

$currentdatetime = date("Y-m-D h:i:s A");
echo $currentdatetime;
?>