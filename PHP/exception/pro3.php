<?php
    /*
        The try...catch Statement
        To avoid the error from the example above, we can use the try...catch statement to catch exceptions and continue the process.

        try {
            code that can throw exceptions
        } catch(Exception $e) {
            code that runs when an exception is caught
        }
    */ 

    function division($ip1, $ip2){
        if($ip2 == 0){
            throw new Exception("Division not Possible");
        }else{
            echo "<hr> Division is ".($ip1 / $ip2);
        }
    }


    echo "<hr> Before Division";
    
    try{
        division(100, 0);
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }

    /*
        The catch block indicates what type of exception should be caught and the name of the variable which can be used to access the exception. In the example above, the type of exception is Exception and the variable name is $err.
    */ 
    
    echo "<hr> After Division";
?>