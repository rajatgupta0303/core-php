<?php
include 'conn.php';

$id=$_GET['delid'];

$exe = $obj->query("delete from register where id= $id");
if($exe)
{
	header('location:show.php');
}

?>
