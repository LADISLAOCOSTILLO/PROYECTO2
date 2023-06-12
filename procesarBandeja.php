<?php

$host = "localhost"; // Cambiar a la dirección de tu servidor de BD
$usuario = "root"; // Cambiar al usuario de tu BD
$password = "54321"; // Cambiar a la contraseña de tu BD
$base_de_datos = "BDTEST"; // Cambiar al nombre de tu BD

$conexion = mysqli_connect($host, $usuario, $password, $base_de_datos);


if (!$conexion) {
    die("Error al conectarse a la base de datos: " . mysqli_connect_error());
}
$nombre= $_POST["nombre_tarea"];
$descripcion = $_POST["descripcion"];
$encargado = $_POST["encargado"];
$fecha=$_POST ["dd/mm/yyyy"];
$telefono = $_POST["telefono"];

$sql = "INSERT INTO tablaBandeja1 (nombre_tarea, descripcion, encargado, fecha, telefono) VALUES ('$nombre', '$descripcion', '$encargado','$fecha','$telefono')";

if (mysqli_query($conexion,$sql)) {
    
    echo "Los datos se han guardado correctamente en la base de datos de bandeja.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>