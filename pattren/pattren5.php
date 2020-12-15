<?php

//*****
//****
//***
//**
//*


// first count no of row=5
// than write
// for($i = 1; $i<=5 ; $i++){}

/*for($i=1; $i<=5; $i++)
{
	for($j =5; $j>=$i; $j--)
		{
			echo"*" ;
		}
	echo "<br/>";
}
*/

for($i=5; $i>=1; $i--)
{
	for($j =1; $j<=$i; $j++)
		{
			echo"*" ;
		}
	echo "<br/>";
}
?>