<?php


//   Strstr : Find the occurrence of a string.
//	Stristr :  Case-insensitive strstr

//   stristr ($string, $search, $before_search)  


    // $string = "Welcome to javaTpoint";  
    // $search1 = "e";  
    // echo strstr($string, $search1);  
      
    // echo '</br>';  
    // $search2 = "JAVA";          //case-sensitive  
    // var_dump(strstr($string, $search2));  
      
    // echo '</br>';  
    // var_dump(strstr($string, "welcOmE"));  


    $string = "Welcome to javaTpoint website.";  
    $before_search = true;  
    $search1 = "a";   
    echo strstr($string, $search1, $before_search);  
      
    echo '</br>';  
    $search2 = "E";  
    var_dump(strstr($string, $search2, $before_search));  
      
    echo '</br>';  
    $search3 = "nt";  
    echo strstr($string, $search3, $before_search);  


        //119 is the ASCII value of lowercase w  
    echo strstr("There are seven wonders in the world.", 119, true);      
    echo '</br>';  
      
    //84 is the ASCII value of uppercase T  
    var_dump(strstr("There are seven wonders in the world.", 84));        
    echo '</br>';  
  
    //79 is the ASCII value of uppercase O  
    var_dump(strstr("There are seven wonders in the world.", 79));    

  
  // var_dump() function is mainly used to display the Boolean values on the browser. Other than the Boolean value, it displays the datatype of parameter and number of character available in that parameter, as you can see in the above example. Echo is not sufficient to print these information.  
?>