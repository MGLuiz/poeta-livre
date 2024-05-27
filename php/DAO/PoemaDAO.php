<?php

    class PoemaDAO{
        private PDO $conn;

        public function __construct($conn){
            $this->conn = $conn;
        }

        public function getAllPoemas($orderBy){
            try{
                $sql = "SELECT * FROM poemas ORDER BY ".$orderBy;

                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                echo $e->getMessage();
                return null;
            }
        }

        public function getPoemasByTitle($t){
            try{
                $sql = "SELECT * FROM poemas WHERE titulo LIKE ? ORDER BY dt_registro DESC";

                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(1, '%'.$t.'%');
                $stmt->execute();
                return $stmt->fetchALl(PDO::FETCH_ASSOC);

            }catch(PDOException $e){
                echo $e->getMessage();
                return null;
            }
        }

        public function insertPoema(Poema $p){
            try{
                $sql = "INSERT INTO poemas(titulo, poema, fonte, dt_registro, autor) VALUES (:titulo, :poema, :fonte, :dt_registro, :autor)";

                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(':titulo', $p->getTitle());
                $stmt->bindValue(':poema', $p->getPoema());
                $stmt->bindValue(':fonte', $p->getFonte());
                $stmt->bindValue(':dt_registro', $p->getDtRegistro());
                $stmt->bindValue(':autor', $p->getIdAutor());
                $stmt->execute();

                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function closeConnection(){
            $this->conn = null;
        }
    }
?>