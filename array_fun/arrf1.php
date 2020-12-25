<?php

//		count = sizeof
//		in_array   ---     	Checks if a specified value exists in an array
//		is_array



//  in_array
//   in_array(search, array, type)   -- SYntax


$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }



//		is_array

// note  :  The is_array() function checks whether a variable is an array or not.    This function returns true (1) if the variable is an array, otherwise it returns false/nothing

//    is_array(variable);

   $a = "Hello";
echo "a is " . is_array($a) . "<br>";

$b = array("red", "green", "blue");
echo "b is " . is_array($b) . "<br>";

$c = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "c is " . is_array($c) . "<br>";

$d = "red, green, blue";
echo "d is " . is_array($d) . "<br>";
?>