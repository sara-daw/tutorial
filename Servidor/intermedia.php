<?php
$codigo = $_POST["codigo"];
$action = $_POST["action"];

if ($action == "e") {
    echo 'vas a eliminar la asignatura'
    header("Location:eiminar.php?codigo=$codigo&action=$action");
} else if ($action == "m") {
    echo 'vas a modificar la asignatura'
    header("Location:modificar.php?codigo=$codigo&action=$action");
}
?>
