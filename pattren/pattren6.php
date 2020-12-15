<?php

//     *
//    **
//   ***
//  ****
// *****

// is tarah ke pattren m 3 loop lagte hai 3rd loop blank print karta hai.
// first count no of row=5
// than write
// for($i = 1; $i<=5 ; $i++){}


for($i = 1; $i<=5 ; $i++)
{
	for($k=1; $k<=5-$i;$k++ )
	{
		echo "1";
	}
	for($j = 1; $j<=$i; $j++)
	{  
		echo "* ";
	}
	echo "<br/>";
}
?>