<?php
    require_once("admin/classes/Connection.class.php");

    class Client extends Connection{
        // get Services

        public function getAllServices(){
            $sqlquery = "select * from services where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getContactUS(){
            $sqlquery = "select * from contactus where contactid = 1";
            return $this->connection->query($sqlquery);
        }

        public function getAllFaq(){
            $sqlquery = "select * from faq where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getAllCategory(){
            $sqlquery = "select * from categorys where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getSocialMediaLinks(){
            $sqlquery = "select * from socialmedia where socialid = 1";
            return $this->connection->query($sqlquery);
        }

        public function getTeamMembers(){
            $sqlquery = "select * from team where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function newMessage($fname, $lname, $senderemail, $phone, $city, $subject, $message){
            $sqlquery = "insert into messages (fname, lname, senderemail, phone, city, subject, message) values ('$fname', '$lname', '$senderemail', '$phone', '$city', '$subject', '$message')";
            $this->connection->query($sqlquery);
        }

        public function addNewSubscriber($subscriberemail){
            $sqlquery = "select * from subscribers where subscriberemail = '$subscriberemail'";
            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return false;
            }else{
                $sqlquery = "insert into subscribers (subscriberemail) values ('$subscriberemail')";
                $this->connection->query($sqlquery);
                return true;
            }
        }

        public function getSliderImages(){
            $sqlquery = "select * from images where imagetype = 1 and status = 1";
            return $this->connection->query($sqlquery);
        }
    }

    $client = new Client();
?>