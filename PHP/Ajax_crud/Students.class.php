<?php
    require_once("Connection.class.php");
    class Students extends Connection{
        
        public function filterData($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }
        
        public function getAllStudents(){
            $sqlquery = "select * from students";
            return $this->connection->query($sqlquery);
        }

        public function addNewStudent($fname, $lname, $city, $email, $phone, $gender){
            // code for check email address exist or not
            $sqlquery = "select * from students where email = '$email'";
            $result = $this->connection->query($sqlquery);
            if($result->num_rows > 0){
                return false;
            }else{
                $sqlquery = "insert into students (fname, lname, city, email, phone, gender) values ('$fname', '$lname', '$city', '$email', '$phone', '$gender')";
                $this->connection->query($sqlquery);
                return $this->connection->insert_id;    
            }
        }

        public function getStudent($id){
            $sqlquery = "select * from students where id = $id";
            return $this->connection->query($sqlquery);
        }

        public function updateStudent($id, $fname, $lname, $city, $email, $phone, $gender){
            $sqlquery = "update students set fname = '$fname', lname = '$lname', city = '$city', email = '$email', phone = '$phone', gender = '$gender' where id = $id";

            $this->connection->query($sqlquery);
            return $this->connection->affected_rows;
        }

        public function deleteStudent($id){
            $sqlquery = "delete from students where id = $id";
            $this->connection->query($sqlquery);
            return $this->connection->affected_rows;
        }
    }

    $students = new Students();
?>