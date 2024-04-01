<?php
    /*
        Validate IPv6 Address
        The following example uses the filter_var() function to check if the variable $ip is a valid IPv6 address:
    */ 

    $ip1 = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if(filter_var($ip1, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === $ip1){
       echo "Valid Data"; 
    }else{
        echo "Invalid Data";
    }

?>