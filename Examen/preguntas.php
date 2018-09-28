<?php

session_start();
$_SESSION["nombre"]=$_REQUEST['nombre'];
$_SESSION["apellido"]=$_REQUEST['apellido'];
$_SESSION["curso"]=$_REQUEST['curso'];
//$_SESSION["preguntas"]=$_REQUEST['preguntas'];



?>

<!DOCTYPE html>
<html>
<head>

 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Preguntas</title>
 <link rel='stylesheet' type='text/css' href='css/estilos.css' />
</head>
<body>
<header>
<?php

$curso=$_POST["curso"];
echo "<h2>EXAMEN $curso CURSO</h2>";


?>
</header>

<form action="expregunta.php" method="POST">
    <fieldset>
    <legend>
    <?php
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    echo "Preguntas para el alumno: $nombre $apellido"
    ?>
    </legend>

<p>Responda a las preguntas siguientes:</p>
<table>

<?php
$preguntas=array("¿Animal con el cuello muy largo?",
"¿Cuanto es 2+8?",
"¿Que significa dog?",
"¿Quién es el único que no pierde en un partido de fútbol?",
"¿Cuántos meses del año tienen 28 días?",
"¿Animal con cebreado?",
"¿Cuanto es 10+10?",
"¿Que significa cat?",
"¿De qué color son las mangas del chaleco verde de Juan?",
"¿Cuál es el lugar más frío de la tierra? ");
rand(($curso*5)-5,($curso*5)-1);
?>

<tr>

<td>
1.-<?php 

    
echo $preguntas[rand(($curso*5)-5,($curso*5)-1)];

?>
<td>

</tr>

<tr>
    <td><input type="text" name="respuesta" /></td>
</tr>

<tr>

<td>
2.-<?php 
    
    echo $preguntas[rand(($curso*5)-5,($curso*5)-1)];

?>
<td>

</tr>
<tr>
    <td><input type="text" name="respuesta1" /></td>
</tr>
<tr>

<td>
3.-<?php 

    
echo $preguntas[rand(($curso*5)-5,($curso*5)-1)];

?>
<td>

</tr>
<tr>
    <td><input type="text" name="respuesta2" /></td>
</tr>

<tr>

    <td><input class="boton" type="submit" value="Responder"/>
    <input class="boton" type="reset" value="Borrar"></td>
    <tr>
    </table>
   </fieldset>
</form>

<footer>
   <i> <p>Es necesario responder a 2 preguntas paa poder pasar el examen </p></i>
 
</footer>






</body>
</html>