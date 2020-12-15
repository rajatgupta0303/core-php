<?php 
$count=0;
$mul=1;
$add=0;
for($a=2; $a<=30; $a++)
{
	if( ($a%2==0) && ($a%3==0) )
	{
		echo "$a <br/>";
		
		$add= $add+$a;

		$count++;
		
		$mul=$mul*$a;
	}

}

echo "Total : $count <br/>";

if($count > 3)
		{
			echo $add;
	 	}
else{
	echo $mul;
    }
?>