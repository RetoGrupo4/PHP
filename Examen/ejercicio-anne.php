<html>

<head>

<title>
EXAMEN
</title>
<link rel='stylesheet' type='text/css' href='css/estilos.css' />
</head>
<body>
<header>
    <h2>EXAMEN</h2>
</header>
<form action="preguntas.php" method="POST">
    <fieldset>
    <legend>Datos del alumno</legend>

<p>Escriba los datos siguientes:</p>
<table>
    <tr>
 <td>Nombre: </td>  
 <td>Apellidos:</td>    
 <td>Curso:</td>   
</tr>
<tr>
    <td><input type="text" name="nombre"  required/></td>
<td><input type="text" name="apellido"  required/></td>
<td>
<select name="curso">
    <option value="1">Primero</option>
    <option value="2">Segundo</option>
</select><br>

</td>


</tr>

<tr>

    <td><input class="boton" type="submit" value="Enviar"/>
    <input class="boton" type="reset" value="Borrar"></td>
    <tr>
    </table>
   </fieldset>
</form>

<footer>
   <i> <p>Pagina del examen de acceso   </p>
    <p> Introduce nombre y apellidos alumno   </p>
    <p>  Selecciona el curso del que quieras hacer el examen Autor: Anne   </p></i>
 
</footer>

</body>

</html>