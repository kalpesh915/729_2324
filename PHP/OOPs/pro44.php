<?php
    /*
        PHP OOP - Static Properties
        PHP - Static Properties : Static properties can be called directly - without creating an instance of a class. Static properties are declared with the static keyword:

    */ 

    class College{
        public static $collegeName = "Darshan University";
    }

    echo College::$collegeName;

    /*
        To access a static property use the class name, double colon (::), and the property name:
        Syntax : ClassName::$staticProp;
    */ 
?>