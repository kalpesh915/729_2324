<?php
    require_once("Connection.class.php");

    class Career extends Connection{
        public function getNewJobApplications(){
            $sqlquery = "select applicationid, fname, lname, gender, jobposition, education, experience, created_at from career where status = 0";
            return $this->connection->query($sqlquery);
        }

        public function getAllJobApplications(){
            $sqlquery = "select applicationid, fname, lname, gender, jobposition, education, experience, created_at from career";
            return $this->connection->query($sqlquery);
        }

        public function changeJobApplicationStatus($applicationid){
            $sqlquery = "update career set status = 1 where applicationid = $applicationid";
            $this->connection->query($sqlquery);
        }

        public function getJobApplication($applicationid){
            $sqlquery = "select * from career where applicationid = $applicationid";
            return $this->connection->query($sqlquery);
        }

        public function deleteJobApplication($applicationid){
            // delete resume file
            $sqlquery = "select resumepath from career where applicationid = $applicationid";

            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                unlink($row["resumepath"]);
            }

            $sqlquery = "delete from career where applicationid = $applicationid";
            $this->connection->query($sqlquery);
        }
    }

    $career = new Career();
?>