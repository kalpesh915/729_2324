<?php
    /*
        Throwing an Exception
        The throw statement allows a user defined function or method to throw an exception. When an exception is thrown, the code following it will not be executed. If an exception is not caught, a fatal error will occur with an "Uncaught Exception" message.
        Lets try to throw an exception without catching it:
    */ 

    function division($ip1, $ip2){
        if($ip2 == 0){
            throw new Exception("Division not Possible");
        }else{
            echo "<hr> Division is ".($ip1 / $ip2);
        }
    }


    echo "<hr> Before Division";
    //division(100, 3);
    division(100, 0);
    echo "<hr> After Division";
?>