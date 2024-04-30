<?php
    require_once("Students.class.php");

    // code for create new student
    if(isset($_POST["save_student"])){
        $fname = $students->filterData($_POST["fname"]);
        $lname = $students->filterData($_POST["lname"]);
        $city = $students->filterData($_POST["city"]);
        $email = $students->filterData($_POST["email"]);
        $phone = $students->filterData($_POST["phone"]);
        $gender = $students->filterData($_POST["gender"]);

        if($fname == NULL || $lname == NULL || $city == NULL || $email == NULL || $phone == NULL || $gender == NULL){
            $response = [
                // A 422 status code indicates that the server was unable to process the request because it contains invalid data.
                "status" => 422,
                "message" => "All Fields are Required"
            ];
            echo json_encode($response);
            return;
        }else{
            
            $id = $students->addNewStudent($fname, $lname, $city, $email, $phone, $gender);
            
            if($id === false){
                $response = [
                    "status" => 423,
                    "message" => "$email is Already Registered with us."
                ]; 
                echo json_encode($response);
                return;
            }else if(($id != null) && ($id > 0)){
                $response = [
                    // The HTTP 200 OK success status response code indicates that the request has succeeded.
                    "status" => 200,
                    "message" => "New Student Created with $id ID."
                ]; 
                echo json_encode($response);
                return;
            }else{
                $response = [
                    "status" => 500,
                    "message" => "Server Error while Creating new Student."
                ];
                echo json_encode($response);
                return;
            }
        }
    }

    // code for get student
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $result = $students->getStudent($id);

        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            $response = [
                "status" => 200,
                "message" => "Student Found",
                "data" => $data
            ];
        }else{
            $response = [
                "status" => 404,
                "message" => "No Data Found on $id ID"
            ];
        }

        echo json_encode($response);
        return;
    }

    // code for update student
    if(isset($_POST["update_student"])){
        $id = $students->filterData($_POST["id"]);
        $fname = $students->filterData($_POST["fname"]);
        $lname = $students->filterData($_POST["lname"]);
        $city = $students->filterData($_POST["city"]);
        $email = $students->filterData($_POST["email"]);
        $phone = $students->filterData($_POST["phone"]);
        $gender = $students->filterData($_POST["gender"]);

        if($id == NULL || $fname == NULL || $lname == NULL || $city == NULL || $email == NULL || $phone == NULL || $gender == NULL){
            $response = [
                "status" => 422,
                "message" => "All Fields are Required"
            ];
            echo json_encode($response);
            return;
        }else{
            $count = $students->updateStudent($id, $fname, $lname, $city, $email, $phone, $gender);

            if($count >= 1){
                $response = [
                    "status" => 200,
                    "message" => "Data Updated"
                ];  
            }else{
                $response = [
                    "status" => 500,
                    "message" => "No Changes in Data"
                ];
            }

            echo json_encode($response);
            return;
        }
    }

    if(isset($_POST["delete_student"])){
        $id = $students->filterData($_POST["id"]);
        $count = $students->deleteStudent($id);
        if($count >= 1){
            $response = [
                "status" => 200,
                "message" => "Data Deleted"
            ];
        }else{
            $response = [
                "status" => 500,
                "message" => "No Data Deleted"
            ];
        }

        echo json_encode($response);
        return;
    }
?>