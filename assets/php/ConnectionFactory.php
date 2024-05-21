<?php
    require $_SERVER['DOCUMENT_ROOT'].'/poetalivre/config/dbConfig.php';

    class ConnectionFactory{
        public static function getConnection(){
            try{
                // drive:host=url;dbname=squema", "user", "pass"
                $conn = new PDO(DRIVE.':host='.URL.';dbname='.SQUEMA, USER, PASS, array(PDO::ATTR_PERSISTENT => true));
                return $conn;

            }catch(PDOException $e){
                echo $e->getMessage();
                return null;
            }
        }
    }
?>