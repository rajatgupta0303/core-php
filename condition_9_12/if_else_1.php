<?php

$a = 10;
// number even or odd
/*
if($a % 2  == 0)
{
	echo "number even";
}
else
{
	echo "number odd";
}*/

if(($a % 2  == 0) || ($a % 3  == 0))
{
	echo "number even";
}
else
{
	echo "number odd";
}


/*
	 condtion      ||    condtion
   	  true                 true

     condtion      &&      condtion
     	true                false
     	false                true 
     	true                 true 

     	*/
?>