<?php

//one dinemsion or newmaric index array

$a = array(10,15,12.5,'a', "hello");
//echo $a[0];
//echo $a[1];
//echo $a[2];
//echo $a[3];
//echo $a[4];
//echo '<pre>';
print_r($a);
$box = count($a);
for($i=0; $i<$box; $i++)
{
		echo "$a[$i]<br/>";
}
?>