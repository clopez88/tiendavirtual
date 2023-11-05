<?php
// Consulta la base de datos para obtener las solicitudes
$sql = "SELECT  * FROM formulario ORDER BY Id DESC LIMIT 1";
$result = $conexion->query($sql);
?>

<!-- Pagina que traera la consulta del usuario registrado -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Solicitudes de Servicio</title>
</head>
<body>
    <h2>Solicitudes de Servicio</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombres y Apellidos</th>
            <th>Correo electrónico</th>
            <th>Número de celular</th>
            <th>Servicio solicitado</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nombres"] . "</td>";
                echo "<td>" . $row["correo"] . "</td>";
                echo "<td>" . $row["celular"] . "</td>";
                echo "<td>" . $row["servicio"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay solicitudes registradas.</td></tr>";
        }
        $conexion->close();
        ?>
    </table>
</body>
</html>