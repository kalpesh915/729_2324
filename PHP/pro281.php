<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
        Global Variables
        Global variables are variables that can be accessed from any scope.
        Variables of the outer most scope are automatically global variables, and can be used by any scope, e.g. inside a function.
        To use a global variable inside a function you have to either define them as global with the global keyword, or refer to them by using the $GLOBALS syntax.    
    */
    

        $ip1 = 10;
        $ip2 = 20;

        function makeSum(){
            $GLOBALS["ans"] = ($GLOBALS["ip1"] + $GLOBALS["ip2"]);  // global
            // $ans = ($GLOBALS["ip1"] + $GLOBALS["ip2"]); // local
        }

        makeSum();
        echo "Sum is $ans";
    ?>
</body>

</html>