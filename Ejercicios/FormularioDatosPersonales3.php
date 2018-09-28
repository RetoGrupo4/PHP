<!DOCTYPE html>
<html>

<head>

<title>
    Formulario de entrada del dato
</title>
<link rel='stylesheet' type='text/css' href='css/estiloDatosPersonales.css' />
</head>
<body>

<form action="accionDatosPersonales3.php" method="POST">
    Escribe su nombre: <input type="text" name="nombre" placeholder="Introduzca su nombre" size="12" required/>
   <br> Escribe sus apellidos: <input type="text" name="apellidos" placeholder="Introduzca sus apellidos"  required/>
    
    <br><input class="boton" type="submit" value="Enviar"/>
    <input class="boton" type="reset" value="Borrar">

   
</form>

</body>

</html>  