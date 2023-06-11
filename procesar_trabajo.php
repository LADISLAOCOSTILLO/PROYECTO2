<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "54321";
$dbname = "BDTEST";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$numeroTarjeta = $_POST['numero_tarjeta'];
$fechaExpiracion = $_POST['fecha_expiracion'];
$codigoSeguridad = $_POST['codigo_seguridad'];
$monto = $_POST['monto'];

// Insertar los datos en la tabla de pagos
$sql = "INSERT INTO pagos (nombre, numero_tarjeta, fecha_expiracion, codigo_seguridad, monto) 
        VALUES ('$nombre', '$numeroTarjeta', '$fechaExpiracion', '$codigoSeguridad', '$monto')";

if ($sql->query($sql) === TRUE) {
    echo "Pago realizado con éxito.";
} else {
    echo "Error al procesar el pago: " . $conn->error;
}

$conn->close();
?>