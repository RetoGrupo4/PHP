<?php

$paises = array ("alemania","brasil","italia","chile","uruguay","australia") ;

//array_keys($paises,"alemania","italia","australia");
$clave = array_search("alemania", $paises);
$clave1 = array_search("italia", $paises);
$clave2 = array_search("australia", $paises);

unset($paises[$clave],$paises[$clave1],$paises[$clave2]);


array_push($paises,"argentina","bolivia");

sort($paises);

print_r($paises);






?>
