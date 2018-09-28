<?php
//Dadas tres variables numéricas de tipo entero $a, $b y $c realizar un programa en PHP que determine cuál tiene el mayor valor y cuál el menor.

$a=rand(1,10);
$b=rand(1,10);
$c=rand(1,10);

echo $a, "<br>";
echo $b, "<br>";
echo $c,"<br>";

if($a > $b){
    if($a > $c){
        echo " A es mayor";
    }
    elseif($c > $a){
        echo " C es mayor";
    }
    else{
        echo "A y C son iguales";
     }

    }
elseif($b > $a){  
    if($b>$c){
		echo " B es mayor";
		
	}
    elseif($c>$b){
        echo "C es mayor ";
    }
    else{
        echo "B y C es iguales";
    }

}

else{
	if($a>$c){
		echo "A y B son iguales ";
	}
	else if($c>$a){
		echo "C es mayor ";
		
	}
	else{
		echo "A y B son iguales ";
	}
	
	}




?>