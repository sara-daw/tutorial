<?php
$conexion = new mysqli("localhost", "root", "", "prueba1");

$codigo = $_GET["codigo"];

$sql = "DELETE FROM asignatura WHERE codigo='$codigo'";

if ($conexion->query($sql)) {
    header("Location: asignaturas.php");
} else {
    echo "Error al eliminar asignatura";
}

$conexion->close();
?>