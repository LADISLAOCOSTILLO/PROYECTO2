<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P_SEGURIDAD</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link href="estilos.Css" rel="stylesheet">
</head>

<body>
<header>
<img class="logo" src="logoTODOIST.png"width="300" height="100" alt="AGENDA"/><br>
<form action="VALIDAR.PHP" method="post">
<h1><Center>SISTEMA DE LOGIN</H1><br>

<tr>
    <td width ="50">USUARIO </td>
    <minlength="4" maxlength="8" size="10"><br>
    <td>
        <input type="text"placeholder ="ingrese su nombre" name ="USUARIO">
    </td>
</tr><br>
<tr>
    <br> 
    <td>CONTRASEÑA</td><br>
    <td>
        <input type="password"placeholder ="ingrese contraseña" name ="PASWORD">
    </td>
</tr><br><br>
<!--<P>usuario <input type="text"placeholder ="ingrese su nombre" name ="USUARIO"></p>-->

<input type="submit" value ="INGRESAR">
<input type="reset" value ="LIMPIAR">
</header>
</form> 
</body>
</html>
