<?php

include 'conn.php';
$id= $_GET['delid'];

$exe = $obj->query("delete from admision where id=$id");

if($exe)
{
	header('Location:show.php');

}
else
{
	echo "sorry";
}
?>