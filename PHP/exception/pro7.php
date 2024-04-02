<?php
    /*
        previous 	Optional. If this exception was thrown in a catch block of another exception, 
                    it is recommended to pass that exception into this parameter
    */ 

    try{
        throw new Exception("Exception 1", 101);
    }catch(Exception $err){
        try {
            throw new Exception("Exception 2", 102, $err);
        }catch(Exception $err1){
            echo "<hr> Error is ".$err1->getMessage();
            echo "<hr> Error is ".$err1->getPrevious()->getMessage();
        }
    }
?>