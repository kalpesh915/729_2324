<?php
    /*
        Validate an Integer Within a Range
        The following example uses the filter_var() function to check if a variable is both of type INT, and between 1 and 200:  
    */ 

    $ip1 = 111;

    if(filter_var($ip1, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>1, "max_range"=>100))) === $ip1){
       echo "Valid Data"; 
    }else{
        echo "Invalid Data";
    }

?>