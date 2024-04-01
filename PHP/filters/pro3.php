<?php
    /*
        Why Use Filters?
        Many web applications receive external input. External input/data can be: User input from a form, Cookies, Web services data, Server variables, Database query results
        You should always validate external data! Invalid submitted data can lead to security problems and break your webpage! By using PHP filters you can be sure your application gets the correct input!

        PHP filter_var() Function
        The filter_var() function both validate and sanitize data. The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:
        The variable you want to check, The type of check to use

        Sanitize a String : The following example uses the filter_var() function to remove all HTML tags from a string:
    */ 

    $ip1 = "<h1>Welcome to world of Filters</h1>";
    echo $ip1;

    $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING);
    echo $ip1;
?>