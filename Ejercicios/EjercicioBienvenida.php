<?php

$nombre="Antonio";
$apellido1="Ruiz";
$apellido2="Santos";

if($nombre == "Antonio" || ($apellido1 == "Ruiz" && $apellido2="Santos") ){

    echo "Bienvenido $nombre $apellido1 $apellido2";
}
else{
    echo "No tiene acceso";
}
?>