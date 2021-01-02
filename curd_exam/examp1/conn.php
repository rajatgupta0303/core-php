<?php

$obj = new mysqli("localhost","root","","testcurd");

$errno = $obj->connect_error;

//echo $obj->connect_error; ;

if($errno != 0 )
{
	echo $obj->connect_error; 

}

?>
