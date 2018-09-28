<?php

$numero=2;

echo "TABLA DE MULTIPLICAR FOR <br>";

for($i=0;$i<=10;$i++){
   
    $resultado= 2 * $i;
    echo " $numero x  $i = $resultado  <br>";
}

echo "<br>TABLA DE MULTIPLICAR WHILE <br>";

$i=0;
while ($i<=10){

    $resultado= 2 * $i;
    echo " $numero x  $i = $resultado  <br>";
    $i++;
}

echo "<br>TABLA DE MULTIPLICAR DO/WHILE <br>";

$i=0;
do{
    $resultado= 2 * $i;

    echo " $numero x  $i = $resultado  <br>";
    $i++;

}while($i<=10);

?>