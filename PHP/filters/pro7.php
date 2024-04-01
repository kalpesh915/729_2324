<?php
    /*
        Sanitize and Validate an Email Address
        The following example uses the filter_var() function to first remove all illegal characters from the $email variable, then check if it is a valid email address:
    */ 

    $ip1 = "demo@gmail.com";
    $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING);

    if(filter_var($ip1, FILTER_VALIDATE_EMAIL) === $ip1){
       echo "Valid Data"; 
    }else{
        echo "Invalid Data";
    }

?>