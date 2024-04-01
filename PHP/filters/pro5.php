<?php
    /*
        Validate an Integer
        The following example uses the filter_var() function to check if the variable $int is an integer. If $int is an integer, the output of the code below will be: "Integer is valid". If $int is not an integer, the output will be: "Integer is not valid":
    */ 

    $ip1 = 0;

    if(filter_var($ip1, FILTER_VALIDATE_INT) === $ip1){
       echo "Valid Data"; 
    }else{
        echo "Invalid Data";
    }

?>