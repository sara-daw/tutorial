<?php

class modeloHorarioProfesores
{
    private $conexion;
    private $profesores;

    public function __construct()
    {
        $this->conexion = new mysqli("localhost", "root", "", "horario");

        $this->profesores = $this->conexion->query("SELECT * FROM profesores");
    }

    public function getProfesores()
    {
        return $this->profesores;
    }

    public function setProfesores($profesores)
    {
        $this->profesores = $profesores;
    }
}

?>