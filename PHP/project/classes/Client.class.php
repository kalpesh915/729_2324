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
    }

    $client = new Client();
?>