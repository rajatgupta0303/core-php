<?php

//multidimaention array

$a = array(
				"a" => array(
								"name" => "Rajat",
								"city" => "Noida",
								"state" => "Uttar pradesh"
							),

				"b" => array(
								"name" => "Aman",
								"city" => "kachh",
								"state" => "Gujrat"
							),


				"c" => array(
								"name" => "Niraj",
								"city" => "baksar",
								"state" => "Bihar"
							)

			);

//echo $a["c"]["state"];
foreach($a as $data)
{
	echo $data["name"]." - - ".$data["city"]." - - ".$data["state"]."<br/>";
	
}
?>