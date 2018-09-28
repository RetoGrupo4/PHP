<?php
echo "<link rel=stylesheet href=css/estilosdado.css>";

$dado = array("carasDado/cara1.jpg","carasDado/cara2.jpg","carasDado/cara3.jpg",
"carasDado/cara4.jpg","carasDado/cara5.jpg","carasDado/cara6.jpg");

$numeroDado=$dado[array_rand($dado)];

echo "<img src=",$numeroDado,">";

?>