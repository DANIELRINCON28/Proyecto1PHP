<?php

class DEVOLUCION
{
    public $peliculaD;
    public $fechaD;
    public $numerocintaD;

    public function __construct($peli, $fecha, $num)
    {
        $this->peliculaD = $peli;
        $this->fechaD = $fecha;
        $this->numerocintaD = $num;
    }

    public function getPeliculaD()
    {
        return $this->peliculaD;
    }
    public function setPeliculaD($peliculaD)
    {
        $this->peliculaD = $peliculaD;
        return $this;
    }

    public function getFechaD()
    {
        return $this->fechaD;
    } 
    public function setFechaD($fechaD)
    {
        $this->fechaD = $fechaD;
        return $this;
    }

    public function getNumerocintaD()
    {
        return $this->numerocintaD;
    } 
    public function setNumerocintaD($numerocintaD)
    {
        $this->numerocintaD = $numerocintaD;
        return $this;
    }
}


?>