<?php
    interface Animal{
        public function makeSound();
        public function eat();
        public function category();
    }

    class Dog implements Animal{
        public function makeSound(){
            echo "Woof Wow";
        }

        public function eat(){
            echo "All Food";
        }

        public function category(){
            echo "Social Animal";
        }
    }

    class Cat implements Animal{
        public function makeSound(){
            echo "Meow Meow";
        }

        public function eat(){
            echo "All Food";
        }

        public function category(){
            echo "Social Animal";
        }
    }

    class Lion implements Animal{
        public function makeSound(){
            echo "OHoooooooooooooooooooooo";
        }

        public function eat(){
            echo "Non Vegeterian";
        }

        public function category(){
            echo "Wild Animal";
        }
    }

    $obj1 = new Dog();
    echo "<hr>".$obj1->makeSound();

    $obj2 = new Cat();
    echo "<hr>".$obj2->makeSound();

    $obj3 = new Lion();
    echo "<hr>".$obj3->makeSound();
?>