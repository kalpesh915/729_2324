<?php
    require_once("Connection.class.php");

    class Counters extends Connection{
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