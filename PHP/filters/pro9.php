<?php
    /*
        Sanitize and Validate a MAC
        
    */ 

    $ip1 = "12:ad:12:32:89:88"; // 0-9 A-F
    $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING);

    if(filter_var($ip1, FILTER_VALIDATE_MAC) === $ip1){
       echo "Valid Data"; 
    }else{
        echo "Invalid Data";
    }

?>