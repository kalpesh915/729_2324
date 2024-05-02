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
    }

    $users = new Users();
?>