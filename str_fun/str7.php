<?php

// Ltrim : It is used to remove whitespace from the left side of a string.
// Rtrim : It is used to remove whitespace from the right side of a string.
// Trim : Remove whitespace or other characters from the beginning and end of the string.


//Ltrim

$str = "    Hello PHP!";  
echo "Without ltrim() Function: " . $str;  
echo "<br>";  
echo "With ltrim() function : " . ltrim($str);  


//rtrim

$str = "Hello PHP!    ";  
echo "Without rtrim() function: " . $str;  
echo "<br>";  
echo "With rtrim() function:" . rtrim($str);  


//trim


$str = "Hello PHP!";  
echo "Your string is: ".$str ."<br>";  
echo "By using trim() function :".trim($str,"He!");  


// sterev 

  $var1="Hello PHP";  
  echo "Your Number is:".$var1;   
  echo "<br>";  
echo "By using 'strrev()' function:".strrev("$var1");   
?>