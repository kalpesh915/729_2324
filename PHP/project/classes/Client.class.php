<?php
    require_once("admin/classes/Connection.class.php");

    class Client extends Connection{
        // get Services

        public function getAllServices(){
            $sqlquery = "select * from services where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getContactUS(){
            $sqlquery = "select * from contactus where contactid = 1";
            return $this->connection->query($sqlquery);
        }

        public function getAllFaq(){
            $sqlquery = "select * from faq where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getAllCategory(){
            $sqlquery = "select * from categorys where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getSocialMediaLinks(){
            $sqlquery = "select * from socialmedia where socialid = 1";
            return $this->connection->query($sqlquery);
        }

        public function getTeamMembers(){
            $sqlquery = "select * from team where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function newMessage($fname, $lname, $senderemail, $phone, $city, $subject, $message){
            $sqlquery = "insert into messages (fname, lname, senderemail, phone, city, subject, message) values ('$fname', '$lname', '$senderemail', '$phone', '$city', '$subject', '$message')";
            $this->connection->query($sqlquery);
        }

        public function addNewSubscriber($subscriberemail){
            $sqlquery = "select * from subscribers where subscriberemail = '$subscriberemail'";
            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return false;
            }else{
                $sqlquery = "insert into subscribers (subscriberemail) values ('$subscriberemail')";
                $this->connection->query($sqlquery);
                return true;
            }
        }

        public function getSliderImages(){
            $sqlquery = "select * from images where imagetype = 1 and status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getGalleryImages(){
            $sqlquery = "select * from images where imagetype = 2 and status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getProducts(){
            //$sqlquery = "select products.productid, products.productname, categorys.categoryname, categorys.categoryclassname, productimages.mediapath from products join categorys on products.productcategory = categorys.categoryid join productimages on products.productid = productimages.productid where products.status = 1";

            $sqlquery = "select products.productid, products.productname, categorys.categoryname, categorys.categoryclassname from products join categorys on products.productcategory = categorys.categoryid where products.status = 1";

            return $this->connection->query($sqlquery);
        }

        public function getProductImage($productid){
            $sqlquery = "select mediapath from productimages where productid = $productid and mediatype = 2 limit 1";
            $result = $this->connection->query($sqlquery);
            while($mediarow = $result->fetch_assoc()){
                return $mediarow["mediapath"];
            }
        }

        public function getProduct($productid){
            $sqlquery = "SELECT products.*, categorys.categoryname from products inner join categorys on products.productcategory = categorys.categoryid WHERE products.productid = $productid";
            return $this->connection->query($sqlquery);
        }

        public function getProductMedia($productid){
            $sqlquery = "select * from productimages where productid = $productid";
            return $this->connection->query($sqlquery);
        }

        public function newJobApplication($fname, $lname, $gender, $dateofbirth, $jobposition, $education, $experience, $phone, $emailaddress, $address, $coverlatter, $resumepath){
            $sqlquery = "insert into career (fname, lname, gender, dateofbirth, jobposition, education, experience, phone, emailaddress, address, coverlatter, resumepath) values ('$fname', '$lname', '$gender', '$dateofbirth', '$jobposition', '$education', '$experience', '$phone', '$emailaddress', '$address', '$coverlatter', '$resumepath')";
            $this->connection->query($sqlquery);
        }

        public function getMetaDetails(){
            $sqlquery = "select * from metatags where metaid = 1";
            return $this->connection->query($sqlquery);
        }

        public function readSettings(){
            $sqlquery = "select * from settings where settingid = 1";
            return $this->connection->query($sqlquery);
        }
    }

    $client = new Client();
?>