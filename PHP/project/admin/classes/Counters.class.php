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

        public function deleteLogs($email, $password, $selection){
            $sqlquery = "select * from adminusers where email = '$email' and password = '$password'";
            // echo $sqlquery;
            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                if($selection == 1){
                    $sqlquery = "delete from logs where logmessage like '%log%'";
                }else{
                    $sqlquery = "delete from logs";
                }
                $this->connection->query($sqlquery);
                return true;
            }else{
                return false;
            }
        }

        /// function for Home Page
        public function getUsername($email){
            $sqlquery = "select fname, lname from adminusers where email = '$email'";
            $result = $this->connection->query($sqlquery);
            while($row = $result->fetch_assoc()){
                return $row["fname"]." ".$row["lname"];
            }
        }

        public function getCategoryCount(){
            $sqlquery = "select count(categoryid) from categorys";
            $result = $this->connection->query($sqlquery);
            while($row = $result->fetch_assoc()){
                return $row["count(categoryid)"];
            }
        }

        public function getProductCount(){
            $sqlquery = "select count(productid) from products";
            $result = $this->connection->query($sqlquery);
            while($row = $result->fetch_assoc()){
                return $row["count(productid)"];
            }
        }

        public function getSubscribersCount(){
            $sqlquery = "select count(subscriberid) from subscribers";
            $result = $this->connection->query($sqlquery);
            while($row = $result->fetch_assoc()){
                return $row["count(subscriberid)"];
            }
        }

        public function getTeamCount(){
            $sqlquery = "select count(teamid) from team";
            $result = $this->connection->query($sqlquery);
            while($row = $result->fetch_assoc()){
                return $row["count(teamid)"];
            }
        }

        public function getServicesCount(){
            $sqlquery = "select count(serviceid) from services";
            $result = $this->connection->query($sqlquery);
            while($row = $result->fetch_assoc()){
                return $row["count(serviceid)"];
            }
        }

        public function getNewResumeCount(){
            $sqlquery = "select count(applicationid) from career where status = 0";
            $result = $this->connection->query($sqlquery);
            while($row = $result->fetch_assoc()){
                return $row["count(applicationid)"];
            }
        }

        public function getBackupFilesCount(){
            return count(glob("backups/" . "*"));
        }

        public function getFaqCount(){
            $sqlquery = "select count(faqid) from faq";
            $result = $this->connection->query($sqlquery);
            while($row = $result->fetch_assoc()){
                return $row["count(faqid)"];
            }
        }
    }

    $counters = new Counters();
?>