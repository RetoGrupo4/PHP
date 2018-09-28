<?php

$nombre=$_POST["nombre"];
echo "Alumn@: $nombre <br>";

$apellido=$_POST["apellido"];
echo "Apellidos: $apellido  <br>"; 

$fp=$_POST["fp"];
echo "Respuesta1: $fp <br>"; 

$cursos=$_POST["cursos"];
foreach($cursos as $value){
    echo " Respuesta2: $value <br>";
}

?>