<!DOCTYPE html>
<html>

<head>

<title>
    Formulario de entrada del dato
</title>
<link rel='stylesheet' type='text/css' href='css/estiloMenu.css' />
</head>
<body>

<form action="accionMenuRestaurante.php" method="POST">
<fieldset>
    <legend>Formulario</legend>
    Numero de la mesa: <input type="number" name="mesa" min="1" max="15" required/><br>
   <br> Nombre y apellidos del camarero: <input type="text" name="nomyape" placeholder="Introduzca el camarero"  required/><br>
    <br>Tres primeros platos:<br>
    <br> <input type="radio" name="primer" value="Sopa">Sopa
    <input type="radio" name="primer" value="Pure">Pure
    <input type="radio" name="primer" value="Macarranos">Macarranos<br>

    <br>Tres segundos platos:<br>
    <br> <input type="radio" name="segundo" value="Entrecot">Entrecot
    <input type="radio" name="segundo" value="Ternera">Ternera
    <input type="radio" name="segundo" value="Risotto">Risotto<br>

    <br>Tres bebidas:<br>
    <br> <input type="radio" name="bebidas" value="Coca cola">Coca cola
    <input type="radio" name="bebidas" value="Nestea">Nestea
    <input type="radio" name="bebidas" value="Aquarius">Aquarius<br>

    <br>Extras: <input type="checkbox" name="extras[]" value="Aperitivos">Aperitivos
    <input type="checkbox" name="extras[]" value="Mantequilla">Mantequilla
    <input type="checkbox" name="extras[]" value="Pan">Pan

    <br><input class="boton" type="reset" value="Borrar">
    <input class="boton" type="submit" value="Enviar"/>
    
    </fieldset>
   
</form>

</body>

</html>  