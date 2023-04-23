<?php
include('db.php');
$USUARIO=$_POST['USUARIO'];
$PASWORD=$_POST['PASWORD'];

session_start();
$_SESSION ['USUARIO']=$USUARIO;
$conexion=mysqli_connect ("localhost","root","54321","BDTEST");

 $consulta ="SELECT*FROM P_SEGURIDAD where USUARIO='$USUARIO' and PASWORD='$PASWORD'";
 $resultado =mysqli_query ($conexion,$consulta);

 $filas=mysqli_num_rows($resultado);
 if ($filas){
   echo"contraseña correcta";
    header("location:HOME.php");
 
 }else {
    ?>
    <?php
    include ("index.php");
    ?>
    <h1  class ="bad">ERROR DE AUTENTICACION</H1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);







