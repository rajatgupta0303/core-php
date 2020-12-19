<?php

function nsum($strt,$end,$div)
{
	$box =0;
	for($strt;$strt<=$end; $strt++)
	{
		if($strt%$div==0)
		{
			$box = $box+1;
		}
	}
	echo $box;
}

nsum(5,15,3);
?>