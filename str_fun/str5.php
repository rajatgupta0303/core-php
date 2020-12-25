<?php


// Strpos : It is used to return the position of the first occurrence of a string inside another string.



//===
// Stripos : It is used to return the position of the first occurrence of a string inside another string.

//   	string			Specify the string to search.				Required.
//		find			Specify he string to find.					Required.
//		start			Specify where to begin the search.			Optional.


//   echo stripos("PHP is My Fav Language , I love php","My");  




   // $str=" PHP is My Fav Language";  
   // echo "Before stripos() function:".$str;  
   // echo "<br>";  
   // echo "After using stripos() function: ".stripos($str,"My");  


  $str1="Hello Php";  
    $str2="Hello Php javatpoint!";  
    echo "First string is: ".$str1;  
    echo "<br>";  
    echo "First string is: ".$str2;  
    echo "<br>";  
    echo strpos("$str1,$str2","Php");  
     

?>