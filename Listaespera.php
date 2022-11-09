<?php

class LISTAESPERA 
{
    public $fechaingreso;
    public $fechasalida;

    public function __construct($ingreso, $salida)
    {
        $this->fechaingreso = $ingreso;
        $this->fechasalida = $salida;
    }

    public function getFechaingreso()
    {
        return $this->fechaingreso;
    }
    public function setFechaingreso($fechaingreso)
    {
        $this->fechaingreso = $fechaingreso;
        return $this;
    }

    public function getFechasalida()
    {
        return $this->fechasalida;
    } 
    public function setFechasalida($fechasalida)
    {
        $this->fechasalida = $fechasalida;
        return $this;
    }
}


?>