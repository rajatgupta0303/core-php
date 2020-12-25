<?php

//		Md5 : It is used to calculate the MD5 hash of a string.
//		SHA1 : It is used to return the SHA-1 hash of a string.


//		Md5 :
// 		Note   :   It uses the RSA DATA security. It returns the hash as a 32 character hexadecimal number.



$str = "Hello PHP";  
echo "Your string is:".$str;  
echo "<br>";  
echo "By using md5() functon:".md5($str);  
echo "<br>"; 



//		SHA1 
//  	note--	It is used to calculate the SHA-1 hash of a string. It uses US secure Hash Algorithm 1. SHA-1 produces a 160-bit output called a message digest.


$str = "Hello PHP";  
echo "Your string is".$str;  
echo "<br>";  
echo sha1($str);  


?>