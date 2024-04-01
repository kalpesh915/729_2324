<?php
    /*
        Remove Characters With ASCII Value > 127
        The following example uses the filter_var() function to sanitize a string. It will both remove all HTML tags, and all characters with ASCII value > 127, from the string:
    */ 

    $ip1 = "<h1>Hello WorldÆØÅ!♣</h1>";

    echo "<hr>".$ip1;

    $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    echo "<hr>".$ip1;

?>