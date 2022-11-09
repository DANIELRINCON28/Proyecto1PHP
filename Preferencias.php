<?php

    class PREFERENCIAS
    {
        public $directorfav;
        public $actorfav;
        public $generofav;

        public function __construct($director, $actor, $genero)
        {
            $this->directorfav = $director;
            $this->actorfav = $actor;
            $this->generofav = $genero;
        }

        public function getDirectorfav()
        {
                return $this->directorfav;
        }
        public function setDirectorfav($directorfav)
        {
                $this->directorfav = $directorfav;

                return $this;
        }

        public function getActorfav()
        {
                return $this->actorfav;
        } 
        public function setActorfav($actorfav)
        {
                $this->actorfav = $actorfav;

                return $this;
        }

        public function getGenerofav()
        {
                return $this->generofav;
        } 
        public function setGenerofav($generofav)
        {
                $this->generofav = $generofav;

                return $this;
        }
    }


?>

