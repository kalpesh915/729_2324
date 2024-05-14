<?php
    require_once("Connection.class.php");

    class Services extends Connection{
        public function addNewService($servicetitle, $servicedescription, $serviceicon){
            $sqlquery = "insert into services (servicetitle, servicedescription, serviceicon) values ('$servicetitle', '$servicedescription', '$serviceicon')";
            $this->connection->query($sqlquery);
        }

        public function getAllServices(){
            $sqlquery = "select * from services";
            return $this->connection->query($sqlquery);
        }

        public function getSingleServices($serviceid){
            $sqlquery = "select * from services where serviceid = $serviceid";
            return $this->connection->query($sqlquery);
        }

        public function updateService($serviceid, $servicetitle, $servicedescription, $serviceicon){
            $sqlquery = "update services set servicetitle = '$servicetitle', servicedescription = '$servicedescription', serviceicon = '$serviceicon' where serviceid = $serviceid";
            $this->connection->query($sqlquery);
        }

        public function changeServiceStatus($serviceid, $status){
            $sqlquery = "update services set status = $status where serviceid = $serviceid";
            $this->connection->query($sqlquery);
        }

        public function deleteService($serviceid){
            $sqlquery = "delete from services where serviceid = $serviceid";
            $this->connection->query($sqlquery);
        }
    }

    $services = new Services();
?>