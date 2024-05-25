<?php
    class Poema{
        private int $id;
        private string $title;
        private string $poema;
        private string $autor;
        private string $fonte;
        private string $dtRegistro;

        public function __construct($title, $poema, $autor, $fonte, $dtRegistro){
            $this->title = $title;
            $this->poema = $poema;
            $this->autor = $autor;
            $this->fonte = $fonte;
            $this->dtRegistro = $dtRegistro;
        }

        // Getters and Setters
        public function getId(){
            return $this->id;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getPoema(){
            return $this->poema;
        }
        public function getIdAutor(){
            return $this->autor;
        }
        public function getFonte(){
            return $this->fonte;
        }
        public function getDtRegistro(){
            return $this->dtRegistro;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function setTitle($title){
            $this->title = $title;
        }
        public function setPoema($poema){
            $this->poema = $poema;
        }
        public function setIdAutor($idAutor){
            $this->autor = $idAutor;
        }
        public function setFonte($fonte){
            $this->fonte = $fonte;
        }
        public function setDtRegistro($dtRegistro){
            $this->dtRegistro = $dtRegistro;
        }
    }
?>