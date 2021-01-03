<?php

include "conn.php";

$id = $_GET['delid'];
//echo $id;
$result = $obj->query("delete from exap where id = $id");

if($result)
{
	header('location:show.php');
}
	
?>
