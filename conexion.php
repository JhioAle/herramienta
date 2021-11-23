<?php
function Conectarse()
{

$cons_usuario="ukl2dyodfva2tzrw";
$cons_contra="uNWFykGYsN51a7jrfvYz";
$cons_base="b1vygblwrhfyediwcheq";
$cons_equipo="b1vygblwrhfyediwcheq-mysql.services.clever-cloud.com";

$link = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base);

if(!$link)
{

    echo "<h3> No se ha podido conectar con la  based de datos </h3><br>";
}
else
{
	echo "<h3> </h3><br>";

}

       return $link;

}
?>
