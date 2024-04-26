<?php
require_once("Connection.class.php");
class Users extends Connection
{
    public function userLogin($email, $password)
    {
        $sqlquery = "select * from students where email = '$email' and userpassword = '$password'";
        //echo $sqlquery;
        $result = $this->connection->query($sqlquery);

        if ($result->num_rows > 0) {
            // user found
            return true;
        } else {
            // not found
            return false;
        }
    }

    public function signUp($fname, $lname, $city, $state, $phone, $email, $password, $gender)
    {
        // check for email address is exist or not
        $sqlquery = "select * from students where email = '$email'";
        $result = $this->connection->query($sqlquery);

        if ($result->num_rows > 0) {
            return 0;
        } else {
            $sqlquery = "insert into students (fname, lname, city, state, phone, email, userpassword, gender) values ('$fname', '$lname', '$city', '$state', '$phone', '$email', '$password', '$gender')";
            echo $sqlquery;
            $this->connection->query($sqlquery);
            // return newly created roll number
            return $this->connection->insert_id;
        }
    }

    public function addDummyImage($roll)
    {
        $sqlquery = "insert into images (roll, imagepath) values ($roll, './assets/profileimages/dummyimg.png')";
        $this->connection->query($sqlquery);
    }

    public function addProfileImage($roll, $imagepath)
    {
        $sqlquery = "insert into images (roll, imagepath) values ($roll, '$imagepath')";
        $this->connection->query($sqlquery);
    }

    public function updateProfileImage($roll, $imagepath){
        $sqlquery = "update images set imagepath = '$imagepath' where roll = $roll";
        $this->connection->query($sqlquery);
    }

    public function getUserLogs($email)
    {
        $sqlquery = "select * from logs where email = '$email'";
        return $this->connection->query($sqlquery);
    }

    public function getOtherUsers($email)
    {
        $sqlquery = "select * from students where email <> '$email'";
        return $this->connection->query($sqlquery);
    }

    public function getProfile($email)
    {
        $sqlquery = "select students.roll, email, fname, lname, city, state, phone, gender, images.imagepath from students join images on students.roll = images.roll where students.email = '$email'";
        return $this->connection->query($sqlquery);
    }

    public function updateProfile($email, $fname, $lname, $city, $state, $phone, $gender)
    {
        $sqlquery = "update students set fname = '$fname', lname = '$lname', city = '$city', state = '$state', phone = '$phone', gender = '$gender' where email = '$email'";
        $this->connection->query($sqlquery);
    }

    public function updatePasword($email, $password)
    {
        $sqlquery = "update students set userpassword = '$password' where email = '$email'";
        $this->connection->query($sqlquery);
    }

    public function deleteProfile($email)
    {
        $sqlquery = "select roll from students where email = '$email'";

        $result = $this->connection->query($sqlquery);

        while ($row = $result->fetch_assoc()) {
            $roll = $row["roll"];
        }

        $this->deleteImage($roll);

        $sqlquery = "delete from logs where email = '$email'";
        $this->connection->query($sqlquery);

        $sqlquery = "delete from students where email = '$email'";
        $this->connection->query($sqlquery);
    }

    public function deleteImage($roll)
    {
        $sqlquery = "select * from images where roll = $roll";
        $result = $this->connection->query($sqlquery);

        while ($row = $result->fetch_assoc()) {
            // delete image file
            if ($row["imagepath"] !== "./assets/profileimages/dummyimg.png") {
                unlink($row["imagepath"]);
            }
        }

        $sqlquery = "delete from images where roll = $roll";
        $this->connection->query($sqlquery);
    }
}

$users = new Users();
