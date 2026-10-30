
<?php
$conexion = new mysqli("localhost", "root", "", "prueba1");

$codigo = $_GET["codigo"];

if (isset($_POST["modificar"])) {
    $color = $_POST["color"];
    $asignatura = $_POST["asignatura"];

    $sql = "UPDATE asignatura
            SET color='$color', asignatura='$asignatura'
            WHERE codigo='$codigo'";

    if ($conexion->query($sql)) {
        header("Location: asignaturas.php");
        exit;
    } else {
        echo "Error al modificar asignatura";
    }
}
?>

<h2>Modificar asignatura</h2>

<form method="POST">
    Color: <input type="text" name="color" required>
    Asignatura: <input type="text" name="asignatura" required>
    <input type="submit" name="modificar" value="Modificar">
</form>

<?php
$conexion->close();
?>
