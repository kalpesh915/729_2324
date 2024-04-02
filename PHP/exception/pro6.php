<?php
    /*
        The Exception Object
        The Exception Object contains information about the error or unexpected behaviour that the function encountered.
        Syntax
        new Exception(message, code, previous)

        Parameter Values
        Parameter 	Description

        message 	Optional. A string describing why the exception was thrown
        code 	    Optional. An integer that can be used to easily distinguish this exception from 
                    others of the same type
        previous 	Optional. If this exception was thrown in a catch block of another exception, 
                    it is recommended to pass that exception into this parameter
    */ 

    function division($ip1, $ip2){
        if($ip2 == 0){
            throw new Exception("Division not Possible", 101);
        }else{
            echo "<hr> Division is ".($ip1 / $ip2);
        }
    }


    echo "<hr> Before Division";
    
    try{
        division(100, 0);
    }catch(Exception $err){
        //echo "<hr> Error is ".$err;
        //echo "<hr> Error is ".$err->getMessage();
        //echo "<hr> Error is ".$err->getCode();
        //echo "<hr> Error is ".$err->getFile();
        echo "<hr> Error is ".$err->getLine();
    }finally{
        echo "<hr> Must be executed";
    }
    
    echo "<hr> After Division";

    /*
        Methods
        When catching an exception, the following table shows some of the methods that can be used to get information about the exception:
        Method 	        Description
        getMessage() 	Returns a string describing why the exception was thrown
        getPrevious() 	If this exception was triggered by another one, this method returns the 
                        previous exception. If not, then it returns null
        getCode() 	    Returns the exception code
        getFile() 	    Returns the full path of the file in which the exception was thrown
        getLine() 	    Returns the line number of the line of code which threw the exception
    */ 
?>