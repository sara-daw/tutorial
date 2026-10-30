<?php

class modeloHorarioHorario
{
    private $conexion;
    private $horario;

    public function __construct()
    {
        $this->conexion = new mysqli("localhost", "root", "", "horario");

        $this->asignaturas = $this->conexion->query("SELECT * FROM horario");
    }

    public function getHorario()
    {
        return $this->horario;
    }

    public function setHorario($horario)
    {
        $this->horario = $horario;
    }
}

?>