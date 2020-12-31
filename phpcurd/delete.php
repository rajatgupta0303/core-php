<?php

$obj = new mysqli("localhost","root","","testcurd");

$errno = $obj->connect_errno;
if($errno != 0)
{
	echo  $obj->connect_error;
	exit;
}

$id = $_GET["delid"];

$exe = $obj->query("delete from user where id=$id");
if($exe)
{
	header('location:read.php');
	
}
else
{

}
?>