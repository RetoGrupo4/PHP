<?php

$aletorio= rand(1,10);//Para obtener un numero al azar

//Bucle para crear un array que sea de longitud como el numero al azar que obtenemos
for ($num=0;$num<$aletorio;$num++){

$numeros[$num]=rand(1,100);//En el array introducimos tambien numeros al azar

echo ($numeros[$num]."<br/>");

}

$contarnumeros=count($numeros)-1;
/*Contamos cuantas posiciones tiene el array 
y le quitamos uno para que cuente con el ultimo numero del indice*/

$suma=0;

if($contarnumeros>=3){//Tiene que ser el array mayor de 3 para sumar los tres ultimos
  
/*Bucle para hacer la suma de los tres ultimos numero
Tiene que iniciar por la ultima posicion por eso de inicio sera la suma de los indices
El numero tiene que ser mayor porque va reduciento el contarnumeros    */ 
for($num=$contarnumeros;$num > ($contarnumeros-3);$num--){
    $suma+=$numeros[$num];
    
}
 echo "La suma de los tres ultimos son: $suma <br>";

}


if ($suma >1 && $suma <=10){

    echo "Esta entre 1 y 10";
}
elseif($suma >10 && $suma <=20){
 
    echo "Esta entre 10 y 20";
}
else{
    echo "Es mayor de 20";
}
?>