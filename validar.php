<?php
include('basedatos.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","12345","actividad");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:ingresar.php");

}else{
    ?>
    <?php
    include("index.html");

 
}
mysqli_free_result($resultado);
mysqli_close($conexion);
