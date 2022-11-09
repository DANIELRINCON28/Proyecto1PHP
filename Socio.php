<?php

    class SOCIO
    {
        public $carnet;
        public $nombre;
        public $direccion;
        public $telefono;

        public function __construct($carn, $nomb, $dire, $tel)
        {
            $this->carnet = $carn;
            $this->nombre = $nomb;
            $this->direccion = $dire;
            $this->telefono = $tel;
        }
 
        public function getCarnet()
        {
                return $this->carnet;
        }
        public function setCarnet($carnet)
        {
                $this->carnet = $carnet;
                return $this;
        }

        public function getNombre()
        {
                return $this->nombre;
        }
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;
                return $this;
        }

        public function getDireccion()
        {
                return $this->direccion;
        }
        public function setDireccion($direccion)
        {
                $this->direccion = $direccion;
                return $this;
        }

        public function getTelefono()
        {
                return $this->telefono;
        }
        public function setTelefono($telefono)
        {
                $this->telefono = $telefono;
                return $this;
        }
    }


?>

