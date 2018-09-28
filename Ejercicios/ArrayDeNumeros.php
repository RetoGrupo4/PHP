
<?php
//Definir un array de 5 elementos y asignar a cada uno de ellos un número. 
//Mediante una estructura condicional, determinar si el promedio de los números son mayores o menores que 6.
//Mostrar un mensaje por pantalla informando el resultado.

$numeros= array (8,6,5,9,4);

$promedio=array_sum($numeros)/count($numeros);

if ($promedio>6){
    echo "PROMEDIO: $promedio --> ES MAYOR DE SEIS";

}
else{
    echo "PROMEDIO: $promedio --> ES MENOR DE SEIS";
}

?>