<?php

 $a = 14.1;
 $b = 14.2;
 $c = 14.3;

 if( ($a > $b) && ($a > $c) )
 {
 	echo "A is big";

 }
 elseif(($b > $a) && ($b > $c))
 {
 	echo "B is big";
 }
 else 
 {
 	echo "C is big";
 }
?>