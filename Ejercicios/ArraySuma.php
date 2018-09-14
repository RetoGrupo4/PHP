<?php

$numeros=array(1,2,3,4,5);
$suma=0;
$contarnumeros=count($numeros);

foreach ($numeros as $valor) {
   $suma+=$valor;
}
echo "La suma es: ", $suma;
?>