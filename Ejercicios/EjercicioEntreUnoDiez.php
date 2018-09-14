<?php

$numero=4;//Declaramos la variable con el numero

$numarrray= array(1=>"uno","dos","tres","cuatro","cinco",
"seis","siete","ocho","nueve","diez");// creamos el array

if ($numero > 1 && $numero <=10){ //condicion si el numero esta entre el 1 y el 10
   
    echo("El numero es " . $numarrray[$numero]);//mostrar el contenido del array
    echo "<br>El numero $numero esta entre el 1 y 10";
}
else{
    echo "El numero $numero no esta entre el 1 y 10";
}

?>