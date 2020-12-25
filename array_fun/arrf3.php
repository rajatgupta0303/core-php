<?php

//  current  --    Returns the current element in an array
//  end   --    Sets the internal pointer of an array to its last element


//current

$people = array("Peter", "Joe", "Glenn", "Cleveland");


echo current($people) . "<br>"; // The current element is Peter
echo next($people) . "<br>"; // The next element of Peter is Joe
echo current($people) . "<br>"; // Now the current element is Joe
echo prev($people) . "<br>"; // The previous element of Joe is Peter
echo end($people) . "<br>"; // The last element is Cleveland
echo prev($people) . "<br>"; // The previous element of Cleveland is Glenn
echo current($people) . "<br>"; // Now the current element is Glenn
echo reset($people) . "<br>"; // Moves the internal pointer to the first element of the array, which is Peter
echo next($people) . "<br>" . "<br>"; // The next element of Peter is Joe

print_r($people);
//echo each($people) . "<br>";
?>