<?php
    /*
        Validate an IP Address
        The following example uses the filter_var() function to check if the variable $ip is a valid IP address:
    */ 

    //$ip1 = "192.168.10.211";
    $ip1 = "192.168.10.311";

    if(filter_var($ip1, FILTER_VALIDATE_IP) === $ip1){
       echo "Valid Data"; 
    }else{
        echo "Invalid Data";
    }

?>