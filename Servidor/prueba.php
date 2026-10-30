<html>
<h2>Añadir asignatura</h2>

<form method="POST">
    Código: <input type="text" name="codigo" required>
    Color: <input type="text" name="color" required>
    Asignatura: <input type="text" name="asignatura" required>
    <input type="submit" name="añadir" value="Añadir">
</form>

<h2>Eliminar o modificar asignatura</h2>

<form action="intermedia.php" method="POST">
    Código: <input type="text" name="codigo" required>
    <input type="submit" name="action" value="e">
    <input type="submit" name="action" value="m">
</form>

<p>Pulsa e para eliminar o m para modificar.</p>

<h2>Lista de asignaturas</h2>

<table border="1">
    <tr>
        <th>Código</th>
        <th>Color</th>
        <th>Asignatura</th>
    </tr>

    <?php
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila["codigo"] . "</td>";
        echo "<td>" . $fila["color"] . "</td>";
        echo "<td>" . $fila["asignatura"] . "</td>";
        echo "</tr>";
    }
    //a
    ?>
</table>
</html>