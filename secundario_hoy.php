<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    
</head>
<body>

<TABLE BORDER="1">
	<TR>
	<TD>

    <h1>Formulario de ingreso de datos BOTON HOY</h1>
    <form action="procesar.php" method="post">

        <label for="nombre_tarea">Nombre Tarea:</label> 
        <input type="text" id="nombre_tarea" name="nombre_tarea">

        <label for="descripcion">Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion"><br><br>

        <label for="email">Email:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <input type="email" id="email" name="email"><br><br>

        <Label for="fecha">Fecha: </label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <input type="date"id="fecha" name="dd/mm/yyyy">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 

        <label for="telefono">TeléfonoC:</label>
        <input type="tel" id="telefono" name="telefono"><br><br>

        <div style="text-align:center;">
            <input type="submit" value="AÑADIR_TAREA">
            <input type="reset" value="LIMPIAR"><br>
        </div>
        <br>
    </form>
    </TD> 
	</TR>
    
	</TABLE>
  
    <a href="pantalla_principal.html"><br>
    <input type="submit" value="REGRESAR"><br>
</body>
</html>