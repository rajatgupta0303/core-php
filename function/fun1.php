<?php

function maxi($a,$b,$c)
{
	if(($a>$b) && ($a>$c))
	{
		echo "A  is  bigest";
	}
	elseif(($b>$a) && ($b>$c))
	{
		echo "B is  bigest";
	}
	else
	{
		echo "C is  bigest";
	}
}

maxi(50,14,8);
?>