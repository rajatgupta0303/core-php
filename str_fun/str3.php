<?php
// Str_replace : It replaces all occurrences of the search string with the replacement string.
// str_replace ( $search, $replace, $string, $count)  

$search = "hello";
$replace = "rajat";
$string = "hello";
$values=  str_replace($search,$replace,$string,$count);
echo $values;
echo $count; 
?>