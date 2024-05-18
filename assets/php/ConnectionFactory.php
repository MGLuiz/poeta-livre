<?php
    class ConnectionFactory{
        private $conn = null;

        public function getConnection(){

            return $this->conn;
        }

        public function readDBCredentials(){
            $dbCreJson = file_get_contents('./../../credentials/dbCredentials.json');
            $dbCreJsonDecoded = json_decode($dbCreJson, true);

            return $dbCreJsonDecoded;
        }
    }
?>