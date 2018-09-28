<?php

$nombre=$_POST["nombre"];
echo "Hola $nombre tienes";

$edad=$_POST["edad"];
echo " $edad años"; 

$sexo=$_POST["sexo"];
echo " de sexo $sexo"; 

$extras=$_POST["extras"];
foreach($extras as $value){
    echo " y vives en $value";
}



?>