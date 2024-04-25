<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
$a[] = "Rachit";
$a[] = "Bhavdeep";
$a[] = "Yagnik";
$a[] = "Jayrajsinh";
$a[] = "Yash";
$a[] = "Tushar";
$a[] = "Yograjsinh";
$a[] = "Udit";
$a[] = "Adarsh";
$a[] = "Aryan";
$a[] = "Gaurav";

$result = "";

$search = $_REQUEST["text"];
$length = strlen($search);

if ($search !== "") {
    $search = strtolower($search);

    foreach($a as $name){
        if(stristr($search, substr($name, 0, $length))){
            if($result == ""){
                $result = $name;
            }else{
                $result .= ", ".$name;
            }
        }

        //echo strpos($name, $search);

        /*if(strpos($name, $search)){
            if($result == ""){
                $result = $name;
            }else{
                $result .= ", ".$name;
            }
        }*/
    }
}

echo $result == "" ? "No Suggestions" : $result;

?>