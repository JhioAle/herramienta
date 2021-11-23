<?php
include('conexion.php');
$usuario=$_POST['usuario'];
$contrasena=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$link=Conectarse();

$consulta="SELECT * FROM usuario where Matricula='$usuario' and Pass='$contrasena'";
$resultado=mysqli_query($link,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:Bloque1.html");

}else{
    ?>
    <?php
    include("index.html");

  ?>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
  <h1 class="bad">!ERROR CONTRASEÑA O USUARIO NO COINCIDEN FAVOR DE VERIFICARLOS!</h1>
  <?php
}
mysqli_free_result($resultado);
$link->close();