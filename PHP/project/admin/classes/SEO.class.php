<?php
    require_once("Connection.class.php");

    class SEO extends Connection{
        public function getSEODetails(){
            $sqlquery = "select * from metatags where metaid = 1";
            return $this->connection->query($sqlquery);
        }

        public function updateSEO($metakeywords, $metadescription, $googletagid){
            $sqlquery = "update metatags set metakeywords = '$metakeywords', metadescription = '$metadescription', googletagid = '$googletagid' where metaid = 1";
            $this->connection->query($sqlquery);
        }
    }

    $seo = new SEO();
?>