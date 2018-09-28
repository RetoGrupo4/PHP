<?php


$arrayAsociativo=array("titulo"=> "Matilda", "director"=>"Danny DeVito");

$arrayNumeros=array(1,2,3,4,5);

$arrayMixto=array(4,"Lugar"=>"Londres", "Precio"=>3);


$suma=(array_sum($arrayAsociativo)+array_sum($arrayNumeros)+array_sum($arrayMixto));

echo $suma;



?>