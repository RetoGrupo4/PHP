<?php

$nombre=$_POST["nombre"];
echo "Alumn@: $nombre <br>";

$edad=$_POST["edad"];
echo "Edad: $edad años <br>"; 

$telefono=$_POST["telefono"];
echo "Telefono: $telefono <br>"; 

$email=$_POST["email"];
echo "Email: $email <br>"; 

$sexo=$_POST["sexo"];
echo "Sexo: $sexo <br>"; 

$provincia=$_POST["provincia"];
echo "Provincia: $provincia <br>"; 

$cursos=$_POST["cursos"];
foreach($cursos as $value){
    echo " Curso: $value <br>";
}

$idioma=$_POST["idioma"];
echo "Idioma: $idioma "; 






?>