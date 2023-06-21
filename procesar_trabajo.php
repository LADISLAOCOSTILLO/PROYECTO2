<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "BDTEST";

$conexion = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexion) {
    die("Error al conectarse a la base de datos: " . mysqli_connect_error());
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

if (mysqli_query($conexion,$sql)) {
    
    echo "Los datos se han guardado correctamente en la base de datos.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>


