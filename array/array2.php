<?php
//associative array or string index array

$a = array("name"=>"Rajat","city"=>"noida","state"=>"uttar pradesh");
//echo $a["name"];
//echo "<br/>";
//echo $a["city"];
//echo "<br/>";
//echo $a["state"];

foreach($a as $k => $v)
{
	echo $k." ".$v;
	echo "</br>";
}


?>