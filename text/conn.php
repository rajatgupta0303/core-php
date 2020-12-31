<?php

$obj = new mysqli("localhost","root","","rwspvdb");

$errno = $obj->connect_error;

if($errno!=0)
{
	echo $obj->connect_error;
	exit;
}
?>
