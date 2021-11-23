<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:rgb(241, 247, 160)";>
<?php

include("conexion.php");
$link=Conectarse();

if(!$link)
{
	echo "<h3> No se ha podido Conectar PhP </h3><hr><br>";

}

$Matricula=$_REQUEST['matricula'];
$Nombre=$_REQUEST['nombre'];
$Apellido=$_REQUEST['apellidos'];
$Correo=$_REQUEST['correo'];
$Pass=$_REQUEST['contraseña'];
$Semestre=$_REQUEST['semestre'];
$Carrera=$_REQUEST['carrera'];
$Turno=$_REQUEST['turno']; 
    

$sql = "INSERT INTO usuario(Matricula,Nombre,Apellido,Correo,Pass,Semestre,Carrera,Turno)
VAlUES ('$Matricula','$Nombre','$Apellido','$Correo','$Pass','$Semestre','$Carrera','$Turno')";


if(mysqli_query($link,$sql)){
  echo "Datos insertados correctamente ";
  session_start(); 
   header("location:Bloque1.html");

   }else{
  echo"Error: ".$sql . "<br>" . mysqli_error($link); 

}
 mysqli_close($link);


?>


</body>
</html>>

