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
            The foreach Loop on Objects
        */ 

        class Student{
            public $roll, $fname, $lname;
            public function __construct($roll, $fname, $lname){
                $this->roll = $roll;
                $this->fname = $fname;
                $this->lname = $lname;
            }
        }

        $obj1 = new Student(123, "udit", "Ghetiya");

        foreach($obj1 as $key => $value){
            echo "<hr>$key = $value";
        }
    ?>
</body>
</html>