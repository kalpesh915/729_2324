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
            PHP Class and Objects
        */

        class Student{
            public $roll = 0, $fname = "", $lname = "";
            function __construct($roll, $fname, $lname){
                $this->roll = $roll;
                $this->fname = $fname;
                $this->lname = $lname;
            }

            function printer(){
                echo "<hr> Welcome $this->fname $this->lname your Roll No. is $this->roll";
            }
        }

        $object1 = new Student(111, "Tushar", "Kadam");
        $object1->printer();
        echo "<hr>";
        var_dump($object1);
    ?>
</body>
</html>