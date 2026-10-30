<?php

class modeloHorarioClases
{
    private $conexion;
    private $clases;

    public function __construct()
    {
        $this->conexion = new mysqli("localhost", "root", "", "horario");

        $this->clases = $this->conexion->query("SELECT * FROM clases");
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function setClases($clases)
    {
        $this->clases = $clases;
    }
}


?>