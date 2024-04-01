<?php
    /*
        Check if Cookies are Enabled
        The following example creates a small script that checks whether cookies are enabled. First, try to create a test cookie with the setcookie() function, then count the $_COOKIE array variable:
    */

    setcookie("username", "Yadav Yagnik", time() + 3600, "/", "", false, false);
    
    //echo count($_COOKIE);
    if(count($_COOKIE) > 0){
        echo "Cookies enabled";
    }else{
        echo "Cookies Disabled";
    }
?>