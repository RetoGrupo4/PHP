<?php

$cuidades=array("md"=>"Madrid","ba"=>"Barcelona","lo"=>"Londres",
"ny"=>"New York","la"=>"Los Angeles","ch"=>"Chicago");



foreach ($cuidades as $item => $value){
    echo "La Ciudad con el indice $item tiene el nombre $value <br>";
}


echo("Final de ejecucion");
?>