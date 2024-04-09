<?php
    // Note: A namespace declaration must be the first thing in the PHP file. The following code would be invalid:

    namespace HTMLCode;
    class Table{
        public function __construct(){
            echo "<hr>Table Class of HTML Code ";
        }
    }

    namespace Furniture;
    class Table{
        // this table class used furniture nameSpace
        public function __construct(){
            echo "<hr>Table Class of Furniture ";
        }
    }

    $table1 = new Table();
?>