<?php

//		array_search ---		
//		array_keys ---- 		
//		array_values  --- 		
//		extract----				



//		array_search

//		array_search(value, array, strict)

$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
echo "<br>";

	$a=array("a"=>"5","b"=>5,"c"=>"5");
echo array_search(5,$a,true);
echo "<br>";
//		array_keys

$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));

echo "<br>";

//		array_values

$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));

echo "<br>";

//		extract
//    extract(array, extract_rules, prefix)

$a = "Original";
$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
extract($my_array);
echo "\$a = $a; \$b = $b; \$c = $c";
echo "<br>";



$a = "Original";
$my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");

extract($my_array, EXTR_PREFIX_SAME, "dup");

echo "\$a = $a; \$b = $b; \$c = $c; \$dup_a = $dup_a";

?>