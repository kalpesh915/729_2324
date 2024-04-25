<?php
class Connection
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "mydb";

    public $connection = null;

    public function __construct()
    {
        $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("<hr> Connection Failed " . $this->connection->connect_error);
        }
    }

    public function printIdFname(){
        $sqlquery = "select id, fname from persons";
        return $this->connection->query($sqlquery);
    }

    public function getPerson($id){
        $sqlquery = "select * from persons where id = $id";
        return $this->connection->query($sqlquery);
    }
}

$dbconn = new Connection();