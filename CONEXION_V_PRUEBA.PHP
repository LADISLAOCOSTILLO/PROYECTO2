<?php

$host = "localhost"; // Cambiar a la dirección de tu servidor de BD
$usuario = "root"; // Cambiar al usuario de tu BD
$password = "admin"; // Cambiar a la contraseña de tu BD
$base_de_datos = "BDTEST"; // Cambiar al nombre de tu BD

$conexion = mysqli_connect($host, $usuario, $password, $base_de_datos);


if (!$conexion) {
    die("Error al conectarse a la base de datos: " . mysqli_connect_error());
}
$bloque1= $_POST["bloque1"];
$bloque2 = $_POST["bloque2"];
$bloque3 = $_POST["bloque3"];
$bloque4=$_POST ["bloque4"];
$clave=$_POST ["clave"];
$DNI=$_POST ["DNI"];
$Nombre=$_POST ["Nombre"];
$Apellido=$_POST ["Apellido"];
$F_nacimiento=$_POST ["dd/mm/yyyy"];


$sql = "INSERT INTO VERSION_PRUEBAS (bloque1, bloque2, bloque3, bloque4, clave,DNI, Nombre, Apellido  ) 
VALUES ('$bloque1', '$bloque2', '$bloque3','$bloque4','$clave','$DNI','$Nombre', '$Apellido' , '$F_nacimiento' )";

if (mysqli_query($conexion,$sql)) {
    
    echo "Los datos se han guardado correctamente en la base de datos.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

//mysqli_close($conexion);
?>
