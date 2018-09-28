<?php


$numero= $_POST["mesa"];
echo "Numero de la mesa $numero <br>";

$nomyape= $_POST["nomyape"];
echo "Camarero: $nomyape <br>";

$primerPlato=$_POST["primer"];

echo "Primer plato: $primerPlato <br>";

$segundoPlato=$_POST["segundo"];

echo "Segundo plato: $segundoPlato <br>";

$bebida=$_POST["bebidas"];

echo "Para beber: $bebida <br>";
echo "Extras:";
$extras=$_POST["extras"];
foreach($extras as $value){
    echo "$value  ";
}





?>