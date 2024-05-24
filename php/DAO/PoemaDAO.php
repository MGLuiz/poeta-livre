<?php

    class PoemaDAO{
        private PDO $conn;

        public function __construct($conn){
            $this->conn = $conn;
        }
        public function getAllPoemas(){
            try{
                $sql = "SELECT * FROM poemas ORDER BY dt_registro DESC";

                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                echo $e->getMessage();
                return null;
            }
        }

        public function closeConnection(){
            $this->conn = null;
        }
    }
?>