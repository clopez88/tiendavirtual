<?php

// conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "programacionweb");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

if (isset($_POST['enviar'])){
    $nombres = $_POST['nombres'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $servicio = $_POST['servicio'];

$sql = "INSERT INTO formulario (nombres, correo, celular, servicio) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssss", $nombres, $correo, $telefono, $servicio);

if ($stmt->execute()) {
    // Los datos se han insertado con éxito
    // Redirecciona a una página que muestre los datos
    include("mostrar_solicitudes.php");
} else {
    // Muestra excepción para insertar los datos
    // Cierra la conexión a la base de datos
    echo "Error al insertar los datos en la base de datos.";
    $conexion->close();
}
}
?>