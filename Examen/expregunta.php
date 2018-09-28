<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Respuestas</title>
 <link rel='stylesheet' type='text/css' href='css/estilos.css' /> 
</head>
<body>
<header>
<?php

$curso=$_SESSION["curso"];
echo "<h2>EXAMEN $curso CURSO</h2>";


?>
</header>

<body>
<form action="expregunta.php" method="POST">
    <fieldset>
    <legend>
    <?php
    $nombre=$_SESSION["nombre"];
    $apellido=$_SESSION["apellido"];
    echo "Preguntas para el alumno: $nombre $apellido"
    ?>
    </legend>

<p>La solucion a las preguntas anteriores:</p>








</fieldset>
</form>
</body>
<footer>

<==<a href="ejercicio-anne.php">Volver a examen</a>
</footer>
</html>