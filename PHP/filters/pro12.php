<?php
    /*
        Validate URL - Must Contain QueryString
        The following example uses the filter_var() function to check if the variable $url is a URL with a querystring:
    */ 

    $ip1 = "https://www.w3schools.com?username=jayraj";

    if(filter_var($ip1, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === $ip1){
       echo "Valid Data"; 
    }else{
        echo "Invalid Data";
    }

?>