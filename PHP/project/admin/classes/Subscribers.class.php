<?php
    require_once("Connection.class.php");

    class Subscribers extends Connection{
        public function getAllSubscribers(){
            $sqlquery = "select * from subscribers";
            return $this->connection->query($sqlquery);
        }

        public function changeSubscribtionStatus($subscribersid, $status){
            $sqlquery = "update subscribers set status = $status where subscriberid = $subscribersid";
            $this->connection->query($sqlquery);
        }
    }

    $subscribers = new Subscribers();
?>