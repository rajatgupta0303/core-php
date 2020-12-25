<?php

//		Implode : It is used to return a string from the elements of an array.
//		Explode : It is used to break a string into an array.
//		Str_split : It is used to split a string into an array.



//  Str_split
$str="Hello PHP"; 
echo "<pre>"; 
print_r(str_split($str,2));  


//		Implode :

//       implode (string $glue, array $pieces)   or  implode (array $pieces)  




$input_arr = array ('Noida', 'Delhi', 'Gurugram');  
    //join with comma and space separator  
    $comma_separation = implode (", ", $input_arr);  
    echo $comma_separation;  
      
    echo "</br>";  
    //join without separator  
    print_r (implode ($input_arr));




 $input_arr1 = array ('Hello', 'everyone!');  
    $input_arr2 = array ('One' => 'Welcome', 'Two' => 'to', 'Three' => 'Javatpoint');  
      
    //join both array elements  
    echo implode(' ', $input_arr1), ' / ', implode(' ', $input_arr2); 








//		Explode :
//syntax
// explode (string $separator, string $originalString, int $limit)  

 // original string   
    $Original_str = "Hello, we are here to help you.";     
      
    // Passed zero   
    print_r (explode (" ",$Original_str, 0));   
    // Passed positive value  
    print_r (explode (" ",$Original_str, 4));   
    // Passed negative value   
    print_r (explode (" ",$Original_str, -3));

    print_r (explode (" ",$Original_str));   

?>