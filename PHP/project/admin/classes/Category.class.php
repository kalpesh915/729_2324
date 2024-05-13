<?php
    require_once("Connection.class.php");

    class Category extends Connection{
        public function addNewCategory($categoryname){
            // check category name is exist or not
            $sqlquery = "select * from categorys where categoryname = '$categoryname'";
            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return false;
            }else{
                // create class name
                $classname = str_replace(" ", "-", $categoryname); 
                $sqlquery = "insert into categorys (categoryname, categoryclassname) values ('$categoryname', '$classname')";
                $this->connection->query($sqlquery);
                return true;
            }
        }

        public function getAllCategory(){
            $sqlquery = "select * from categorys";
            return $this->connection->query($sqlquery);
        }

        public function getSingleCategory($categoryid){
            $sqlquery = "select * from categorys where categoryid = $categoryid";
            return $this->connection->query($sqlquery);
        }

        public function updateCategory($categoryid, $categoryname){
            // check category name is exist or not
            $sqlquery = "select * from categorys where categoryname = '$categoryname'";
            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return false;
            }else{
                // create class name
                $classname = str_replace(" ", "-", $categoryname); 
                $sqlquery = "update categorys set categoryname = '$categoryname', categoryclassname = '$classname' where categoryid = $categoryid";
                $this->connection->query($sqlquery);
                return true;
            }
        }

        public function changeCategoryStatus($categoryid, $status){
            $sqlquery = "update categorys set status = '$status' where categoryid = $categoryid";
            $this->connection->query($sqlquery);
        }
    }

    $category = new Category();
?>