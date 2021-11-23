<!DOCTYPE html>
<html>
<body background="205,5,12">
<link rel="stylesheet" href="css/estilo2.css" >
    <link rel="stylesheet" href="css/cabecera.css" >

<?php 

    $pregunta1 = $_POST['PreguntaUno'];
    $pregunta2 = $_POST['PreguntaDos'];
    $pregunta3 = $_POST['PreguntaTres'];
    $pregunta4 = $_POST['PreguntaCuatro'];
    $pregunta5 = $_POST['PreguntaCinco'];
    $pregunta6 = $_POST['PreguntaSeis'];
    $pregunta7 = $_POST['PreguntaSiete'];
    $pregunta8 = $_POST['PreguntaOcho'];
    $pregunta9 = $_POST['PreguntaNueve'];
    $pregunta10 = $_POST['PreguntaDies'];

    $mensaje = " ";




    $puntos = 0 ;
     
    if($pregunta1 == "V"){
        $puntos = $puntos + 1;
    }
    if($pregunta2 == "V"){
        $puntos = $puntos + 1;
    }
    if($pregunta3 == "F"){
        $puntos = $puntos + 1;
    }
    if($pregunta4 == "V"){
        $puntos = $puntos + 1;
    }
    if($pregunta5 == "F"){
        $puntos = $puntos + 1;
    }
    if($pregunta6 == "F"){
        $puntos = $puntos + 1;
    }
    if($pregunta7 == "V"){
        $puntos = $puntos + 1;
    }
    if($pregunta8 == "V"){
        $puntos = $puntos + 1;
    }
    if($pregunta9 == "V"){
        $puntos = $puntos + 1;
    }
    if($pregunta10 == "V"){
        $puntos = $puntos + 1;
    }
    if($puntos <= 5){
        $mensaje="Repasa el bloque de nuevo";
    } else if(($puntos == 6) || ($puntos == 7)){
        $mensaje="PASASTE!! Pero podrias hacerlo mejor";
    }else if(($puntos == 8) || ($puntos == 9)){
        $mensaje="PASASTE!!";
    }else if($puntos == 10) {
        $mensaje="EXCELENTE DOMINAS EL TEMA!!";
    }



echo  " <h1> Resultado: $puntos  <br> $mensaje<h1/> <br>"; 
  
   

 include("conexion.php");

$link=Conectarse();

if(!$link)
{
    
    echo "<h3> No se ha podido Conectar PhP </h3><hr><br>";
    

}

 
 
    

$sql = "INSERT INTO resultado(resultado)
VAlUES ('$puntos')";


if(mysqli_query($link,$sql)){
  echo "<h3> cuestionario finalizado <h3>";
  

   }else{
  echo"Error: ".$sql . "<br>" . mysqli_error($link); 

}
 mysqli_close($link);

    
?>
<br>
<br>

 <A href="https://forms.gle/BphoqCXf3mbnwpLg9">POR FAVOR CONTESTA NUESTRA ENCUESTA </a>    
</body>
</html>