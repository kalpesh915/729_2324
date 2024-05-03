<?php
    require_once("Connection.class.php");

    class Counters extends Connection{
        // code for messages
        public function getUnreadMessageCount(){
            $sqlquery = "select count(messageid) from messages where status = 0";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                $unreadMessageCount = $row["count(messageid)"];
            }

            return $unreadMessageCount;
        }

        public function loadSomeMessages($limit){
            $sqlquery = "select * from messages where status = 0 order by (messageid) desc limit $limit ";
            return $this->connection->query($sqlquery);
        }

        public function getSingleMessage($messageid){
            $sqlquery = "select * from messages where messageid = $messageid";
            return $this->connection->query($sqlquery);
        }

        public function markMessageasRead($messageid){
            $sqlquery = "update messages set status = 1 where messageid = $messageid";
            $this->connection->query($sqlquery);
        }

        public function getAllUnreadMessages(){
            $sqlquery = "select * from messages where status = 0 order by (messageid) desc";
            return $this->connection->query($sqlquery);
        }

        public function getAllMessages(){
            $sqlquery = "select * from messages order by (messageid) desc";
            return $this->connection->query($sqlquery);
        }

        // code for logs
        public function getUnreadLogsCount(){
            $sqlquery = "select count(logid) from logs where status = 0";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                $unreadLogCount = $row["count(logid)"];
            }

            return $unreadLogCount;
        }

        public function loadSomeLogs($limit){
            $sqlquery = "select * from logs where status = 0 order by (logid) desc limit $limit ";
            return $this->connection->query($sqlquery);
        }

        public function getAllUnreadLogs(){
            $sqlquery = "select * from logs where status = 0 order by (logid) desc";
            return $this->connection->query($sqlquery);
        }

        public function getAllLogs(){
            $sqlquery = "select * from logs order by (logid) desc";
            return $this->connection->query($sqlquery);
        }

        public function markAllRead(){
            $sqlquery = "update logs set status = 1 where status = 0";
            $this->connection->query($sqlquery);
        }
    }

    $counters = new Counters();
?>