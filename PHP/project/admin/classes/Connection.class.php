<?php
    class Connection{
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "729project";

        public $connection = null;

        public function __construct(){
            $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

            if($this->connection->connect_error){
                die("<hr> Connection Failed ".$this->connection->connect_error);
            }
        }

        // filter Data
        public function filterData($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }

        // log writer
        public function logWriter($email, $logmessage){
            $sqlquery = "insert into logs (email, logmessage) values ('$email', '$logmessage')";
            $this->connection->query($sqlquery);
        }
    }
?>