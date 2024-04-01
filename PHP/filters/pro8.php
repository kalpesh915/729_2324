<?php
    /*
        Sanitize and Validate a URL
        The following example uses the filter_var() function to first remove all illegal characters from a URL, then check if $url is a valid URL:
    */ 

    $ip1 = "https://www.google.com";
    $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING);

    if(filter_var($ip1, FILTER_VALIDATE_URL) === $ip1){
       echo "Valid Data"; 
    }else{
        echo "Invalid Data";
    }

?>