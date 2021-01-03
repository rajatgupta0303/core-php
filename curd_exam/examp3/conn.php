<?php

$obj = new mysqli("localhost","root","","testcurd"); 

$exe = $obj->connect_error;
if($exe!=0)
{
	echo $obj->connect_error;
}

?>