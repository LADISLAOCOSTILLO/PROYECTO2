<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <img src="logoTODOIST.png" width="400" height="100"alt="AGENDA"/>
    <title>Datos</title>
    
</head>
<body>



    <h3>FORMULARIO DE INGRESO A BOTON BANDEJA</h3>
    <form action="procesarBandeja.php" method="post">

        <label for="nombrsse_tarea">Nombre Tarea:</label> 
        <input type="text" id="nombre_tarea" name="nombre_tarea">

        <label for="descripcion">Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion"><br><br>

        <label for="Encargado">Encargado:</label>&nbsp
        <input type="text" id="Encargado" name="Encargado"><br><br>

        <Label for="fecha">Fecha: </label>  
        <input type="date"id="fecha" name="dd/mm/yyyy">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 

        <label for="telefono">TeléfonoC:</label>
        <input type="tel" id="telefono" name="telefono"><br><br>

        <div style="text-align:center;">
            <input type="submit" value="AÑADIR">
            <input type="reset" value="LIMPIAR">
            
            
            
        </div>
        <br>
    </form>
  
      <a href="pantalla_principal.html">
    <input type="submit" value="REGRESAR">
    <a href="listarBandeja.php">
    <input type="submit" value="LISTAR"><br>
</body>
</html>