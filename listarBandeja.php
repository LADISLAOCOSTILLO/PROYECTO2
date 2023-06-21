<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <img src="logoTODOIST.png" width="400" height="100"alt="AGENDA"/>
    <title>REPORTES BANDEJA</title>
</head>
<body>
    <h2>REPORTE DE ACTIVIDADES REALIZADAS</h2>
	
    <?php
    
    $host = "localhost"; // Cambiar a la dirección de tu servidor de BD
    $usuario = "root"; // Cambiar al usuario de tu BD
    $password = "54321"; // Cambiar a la contraseña de tu BD
    $base_de_datos = "BDTEST"; // Cambiar al nombre de tu BD

    $conexion = mysqli_connect($host, $usuario, $password, $base_de_datos);
 
    
// Verificar si hay errores en la conexión
if (mysqli_connect_errno()) {
    echo "Error en la conexión a MySQL: " . mysqli_connect_error();
}

// Ejecutar la consulta
$consulta = "SELECT * FROM tablaBandeja1";
$resultados = mysqli_query($conexion, $consulta);

// Verificar si se obtuvieron resultados
if (mysqli_num_rows($resultados) > 0) {
    // Inicio de la tabla HTML
    echo '<table>';
    // Encabezados de la tabla
    echo '<tr>';
    echo '<th style="border: 3px solid red;">nombre_tarea</th>';
    echo '<th style="border: 3px solid red;">descripcion</th>';
    echo '<th style="border: 3px solid red;">Encargado</th>';
    echo '<th style="border: 3px solid red;">fecha</th>';
    echo '<th style="border: 3px solid red;">telefono</th>';
    echo '</tr>';
   
    // Mostrar los datos en filas de la tabla
    while ($fila = mysqli_fetch_assoc($resultados)) {
        echo '<tr>';
        echo '<td style="border: 2px solid green;">' . $fila['nombre_tarea'] . '</td>';
        echo '<td style="border: 2px solid green;">' . $fila['descripcion'] . '</td>';
        echo '<td style="border: 2px solid green;">' . $fila['Encargado'] . '</td>';
        echo '<td style="border: 2px solid green;">' . $fila['fecha'] . '</td>';
        echo '<td style="border: 2px solid green;">' . $fila['telefono'] . '</td>';
        
        
                    
        echo '</tr>';
    }
    
    // Fin de la tabla HTML
    echo '</table>';
} else {
    echo 'No se encontraron resultados.';
}
//echo '<a href="secundario.php"><button>REGRESAR</button></a>';

echo '<a href="secundario.php"><button>REGRESAR</button></a>';
// Cerrar la conexión a la base de datos
mysqli_close($conexion);


    ?>
    <a href="reporteBandeja.php">
    <button type="submit" name="submit">PDF</button>
</a>
    
</body>
</html>
    
    
    

