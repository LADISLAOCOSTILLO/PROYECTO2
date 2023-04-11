<?php
$usuario=$_POST ['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION ['usuario']=$usuario;
$conexion=mysqli_connect ("localhost","root","54321","BDTEST");

 $consulta ="SELECT*FROM LOGIN2 where usuario='$usuario' and contraseña='$contraseña'";
 $resultado =mysqli_query ($conexion,$consulta);

 $filas=mysqli_num_rows($resultado);
 if ($filas){
    header("location:HOME.php");
 
 }else {
    ?>
    <?php
    include ("index.php");
    ?>
    <h1 class ="bad">ERROR DE AUTENTICACION</H1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
