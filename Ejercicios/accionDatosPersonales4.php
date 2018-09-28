
<html>
<head>
    <meta charset="utf-8" />
 
</head>
<body>
<?php

$nombre=$_POST["nombre"];
echo "Su nombre es $nombre <br>";

$apellidos=$_POST["apellidos"];
echo "Sus apellidos son $apellidos <br>";

$sexo=$_POST["sexo"];
echo "Es un@ $sexo <br>";

$colores=$_POST["colores"];
foreach($colores as $value){
    echo " Color: $value <br>";
}

$edad=$_POST["edad"];
echo "Su edad es $edad <br>";


$peso=$_POST["peso"];
echo "Su peso es: $peso <br>";

$estado=$_POST["estado"];
echo "Su estado civil: $estado <br>";

echo " Aficiones:  <br>";
$aficiones=$_POST["aficiones"];
foreach($aficiones as $value){
    echo "  $value <br>";
}

?>
<br>
<a href="FormularioDatosPersonales4.php">Volver al formulario</a>
</body>
</html>
