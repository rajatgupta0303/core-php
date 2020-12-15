<?php 
$count=0;
for($a=3; $a<=30; $a++)
{
	if($a%7==0)
	{
		echo "$a <br/>";
		$count++;
		

	}
}
echo " Total divisible number : $count <br/>";

?>