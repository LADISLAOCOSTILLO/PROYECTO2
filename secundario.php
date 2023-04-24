<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
<TABLE BORDER>
	<TR>
		<TD>

    <h1>Formulario de ingreso de datos</h1>
    <form action="procesar.php" method="post">

        <label for="nombre_tarea">Nombre Tarea:</label>
        <input type="text" id="nombre_tarea" name="nombre_tarea">

        <label for="descripcion">Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <Label for="fecha">Fecha: </label>
        <input type="date"id="fecha" name="dd/mm/yyyy">

        <label for="telefono">Teléfono Contacto:</label>
        <input type="tel" id="telefono" name="telefono"><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="LIMPIAR">
    </form>
    </TD> 
	</TR>
	
    </TABLE>
</body>
</html>
