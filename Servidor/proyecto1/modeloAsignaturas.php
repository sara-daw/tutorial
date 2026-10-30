<?php

class modeloHorarioAsignaturas
{
    private $conexion;
    private $asignaturas;

    public function __construct()
    {
        $this->conexion = new mysqli("localhost", "root", "", "horario");

        $this->asignaturas = $this->conexion->query("SELECT * FROM asignatura");
    }

    public function getAsignaturas()
    {
        return $this->asignaturas;
    }

    public function setAsignaturas($asignaturas)
    {
        $this->asignaturas = $asignaturas;
    }
}


?>