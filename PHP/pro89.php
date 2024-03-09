<?php
    namespace rajkot;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        namespace Rajkot;

use Student;

    /*
        PHP Predefined Constants
        PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants".
        These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.     
    */
        

        class Students{
            public function __construct(){
                echo "<hr>Class Name : ".__CLASS__;
            }

            public function getDir(){
                echo "<hr>Dir : ".__DIR__;
            }

            public function getFile(){
                echo "<hr>File : ".__FILE__;
            }

            public function getLine(){
                echo "<hr>Line : ".__LINE__;
            }

            public function getFunction(){
                echo "<hr>Function : ".__FUNCTION__;
            }

            public function getMethod(){
                echo "<hr>Method : ".__METHOD__;
            }

            public function getNameSpace(){
                echo "<hr>Name Space : ".__NAMESPACE__;
            }

            public function getTrait(){
                echo "<hr>Traint : ".__TRAIT__;
            }

            public function getClassName(){
                echo "<hr>Class Name : ".Student::class;
            }
        }

        $obj = new Students();
        $obj->getDir();
        $obj->getFile();
        $obj->getLine();
        $obj->getFunction();
        $obj->getMethod();
        $obj->getNameSpace();
        $obj->getTrait();
        $obj->getClassName();
    ?>
</body>

</html>