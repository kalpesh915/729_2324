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
        The break Keyword
        When PHP reaches a break keyword, it breaks out of the switch block. This will stop the execution of more code, and no more cases are tested. The last block does not need a break, the block breaks (ends) there anyway.
        Warning: If you omit the break statement in a case that is not the last, and that case gets a match, the next case will also be executed even if the evaluation does not match the case!

        The default keyword specifies the code to run if there is no case match:
    */

        $ip1 = 3;

        switch($ip1){
            case 1:{
                echo "<hr> One";
                //break;
            }
            case 2:{
                echo "<hr> Two";
                //break;
            }
            case 3:{
                echo "<hr> Three";
                //break;
            }
            case 4:{
                echo "<hr> Four";
                //break;
            }
            case 5:{
                echo "<hr> Five";
                //break;
            }
            default:{
                echo "<hr> Out of 1 to 5";
                //break;
            }
        }

    ?>
</body>

</html>