<?php

class PRESTAMO
{
    public $peliculaP;
    public $fechaP;
    public $numerocintaP;

    public function __construct($peli, $fecha, $num)
    {
        $this->peliculaP = $peli;
        $this->fechaP = $fecha;
        $this->numerocintaP = $num;
    }

    public function getPeliculaP()
    {
        return $this->peliculaP;
    }
    public function setPeliculaP($peliculaP)
    {
        $this->peliculaP = $peliculaP;
        return $this;
    }

    public function getFechaP()
    {
        return $this->fechaP;
    }
    public function setFechaP($fechaP)
    {
        $this->fechaP = $fechaP;
        return $this;
    }

    public function getNumerocintaP()
    {
        return $this->numerocintaP;
    }
    public function setNumerocintaP($numerocintaP)
    {
        $this->numerocintaP = $numerocintaP;

        return $this;
    }
}
?>