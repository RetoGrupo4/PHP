<!DOCTYPE html>
<html>

<head>

<title>
    Formulario de entrada del dato
</title>
<link rel='stylesheet' type='text/css' href='css/estiloDatosPersonales.css' />
</head>
<body>

<form action="accionDatosPersonales4.php" method="POST">
<fieldset>
    <legend>Formulario</legend>
    Escribe su nombre: <input type="text" name="nombre" placeholder="Introduzca su nombre" size="12" required/><br>
   <br> Escribe sus apellidos: <input type="text" name="apellidos" placeholder="Introduzca sus apellidos"  required/><br>
    <br>Indique su sexo:<br>
    <br> <input type="radio" name="sexo" value="Hombre">Hombre
    <input type="radio" name="sexo" value="Mujer">Mujer<br>

    <br>Colores: <input type="checkbox" name="colores[]" value="rojo">rojo
    <input type="checkbox" name="colores[]" value="verde">verde
    <input type="checkbox" name="colores[]" value="naranja">naranja<br>

   <br>Edad: <select name="edad">
       <option value="menos de 20 años" selected>Menos de 20 años</option>
       <option value="entre 20 y 39 años">Entre 20 y 39 años</option>
       <option value="entre 40 y 59 años">Entre 40 y 59 años</option>
       <option value="60 años o más">60 años o más</option>
   </select><br>

<br> Peso: <input type="text" name="peso"  size="1" required/>Kg<br>

<br>Estado Civil:<br>
    <br> <input type="radio" name="estado" value="Soltero">Soltero
    <input type="radio" name="estado" value="Casaso">Casado
    <input type="radio" name="estado" value="Otro">Otro<br>

    <br>Aficiones: <input type="checkbox" name="aficiones[]" value="Cine">Cine
    <input type="checkbox" name="aficiones[]" value="Deporte">Deporte
    <input type="checkbox" name="aficiones[]" value="Literatura">Literatura
    <input type="checkbox" name="aficiones[]" value="Música">Música
    <input type="checkbox" name="aficiones[]" value="Tebeos">Tebeos
    <input type="checkbox" name="aficiones[]" value="Televisión">Televisión

    <br><input class="boton" type="reset" value="Borrar">
    <input class="boton" type="submit" value="Enviar"/>
    
    </fieldset>
   
</form>

</body>

</html>  