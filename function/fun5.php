<?php

function nsum($strt,$end,$div)
{
	$count =0;
	for($strt;$strt<=$end; $strt++)
	{
		if($strt%$div==0)
		{
			$count++;
		}
	}
	echo $count;
}

nsum(5,30,3);
?>