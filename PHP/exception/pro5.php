<?php
    /*
        The try...catch...finally Statement
        The try...catch...finally statement can be used to catch exceptions. Code in the finally block will always run regardless of whether an exception was caught. If finally is present, the catch block is optional.

        try {
            code that can throw exceptions
        } catch(Exception $e) {
            code that runs when an exception is caught
        } finally {
            code that always runs regardless of whether an exception was caught
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
    }finally{
        echo "<hr> Must be executed";
    }
    
    echo "<hr> After Division";
?>