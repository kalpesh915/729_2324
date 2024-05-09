<?php
    require_once("Connection.class.php");

    class FAQ extends Connection{
        public function addNewFaq($question, $answer){
            $sqlquery = "insert into faq (question, answer) values ('$question', '$answer')";
            $this->connection->query($sqlquery);
        }

        public function getAllFaq(){
            $sqlquery = "select * from faq";
            return $this->connection->query($sqlquery);
        }

        public function getSingleFaq($faqid){
            $sqlquery = "select * from faq where faqid = $faqid";
            return $this->connection->query($sqlquery);
        }

        public function updateFaq($faqid, $question, $answer){
            $sqlquery = "update faq set question = '$question', answer = '$answer' where faqid = $faqid";
            $this->connection->query($sqlquery);
        }

        public function changeFaqStatus($faqid, $status){
            $sqlquery = "update faq set status = '$status' where faqid = $faqid";
            $this->connection->query($sqlquery);
        }

        public function deleteFaq($faqid){
            $sqlquery = "delete from faq where faqid = $faqid";
            $this->connection->query($sqlquery);
        }
    }

    $faq = new FAQ();
?>