<?php
    require_once("Connection.class.php");

    class Users extends Connection{
        public function adminLogin($email, $password){
            $sqlquery = "select * from adminusers where email = '$email' and password = '$password'";
            // echo $sqlquery;
            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return true;
            }else{
                return false;
            }
        }

        public function getProfile($email){
            $sqlquery = "select fname, lname from adminusers where email = '$email'";
            return $this->connection->query($sqlquery);
        }

        public function updateProfile($email, $fname, $lname){
            $sqlquery = "update adminusers set fname = '$fname', lname = '$lname' where email = '$email'";
            $this->connection->query($sqlquery);
        }

        public function updatePassword($email, $npass){
            $sqlquery = "update adminusers set password = '$npass' where email = '$email'";
            $this->connection->query($sqlquery);
        }
    }

    $users = new Users();
?>