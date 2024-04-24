<?php
    class Connection{
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "mydb";
        public $connection = null;

        // create connection when constructor called
        public function __construct(){
            $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

            if($this->connection->connect_error){
                die("<hr> Connection Failed Due to ".$this->connection->connect_error);
            }
        }

        public function filterData($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }

        public function logWriter($email, $eventmessage){
            $sqlquery = "insert into logs (email, eventmessage) values ('$email', '$eventmessage')";
            $this->connection->query($sqlquery);
        }

    }
?>