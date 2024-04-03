<?php
    /*
        PHP OOP - Classes and Objects
        A class is a template for objects, and an object is an instance of class.
        
        OOP Case
        Let's assume we have a class named Fruit. A Fruit can have properties like name, color, weight, etc. We can define variables like $name, $color, and $weight to hold the values of these properties.
        When the individual objects (apple, banana, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
        Define a Class : A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods go inside the braces:
    */ 

    class Fruit{
        // create some property to hold values of fruit
        public $name = "Apple", $color = "red", $price = "200", $weight = "1kg";
        // values is fixed / hardcoded
    }

    $obj1 = new Fruit();
    $obj2 = new Fruit();
    $obj3 = new Fruit();

    echo "<hr> Name from First Object : ".$obj1->name;
    echo "<hr> Name from Second Object : ".$obj2->name;
    echo "<hr> Name from Third Object : ".$obj3->name;
?>