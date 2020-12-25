<?php

//		array_push  ----           Inserts one or more elements to the end of an array
//		array_pop   ---            Deletes the last element of an array
//		array_unshift ----         Adds one or more elements to the beginning of an array
//		array_shift   ----         Removes the first element from an array, and returns the value of the removed element


//		array_push --  
	
		$a=array("red","green");
		array_push($a,"blue","yellow");
		print_r($a);
		echo "<br>";


//		array_pop



		$a=array("red","green","blue");
				array_pop($a);
		print_r($a);
		echo "<br>";

//		array_unshift


		$a=array("a"=>"red","b"=>"green");
		array_unshift($a,"blue");
		print_r($a);
		echo "<br>";



//		array_shift

		$a=array("a"=>"red","b"=>"green","c"=>"blue");
		echo array_shift($a);
		print_r ($a);
		echo "<br>";
?>