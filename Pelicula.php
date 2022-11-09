<?php

    class pelicula
    {
        public $titulo;
        public $genero;
        public $actor;
        public $director;

        public function __construct($tit, $gen, $act, $direct)
        {
            $this->titulo = $tit;
            $this->genero = $gen;
            $this->actor = $act;
            $this->director = $direct;
        }
 
        public function getTitulo()
        {
                return $this->titulo;
        }
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;
                return $this;
        }
       
        public function getGenero()
        {
                return $this->genero;
        } 
        public function setGenero($genero)
        {
                $this->genero = $genero;
                return $this;
        }

        public function getActor()
        {
                return $this->actor;
        }
        public function setActor($actor)
        {
                $this->actor = $actor;
                return $this;
        }

        public function getDirector()
        {
                return $this->director;
        }
        public function setDirector($director)
        {
                $this->director = $director;
                return $this;
        }

       
    }


?>

