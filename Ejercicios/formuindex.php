<!DOCTYPE html>
<html>

<head>

<title>
    Formulario 
</title>
<link rel='stylesheet' type='text/css' href='css/estilosindex.css' />
</head>
<body>
<h1>Página de confirmacion del registro de usuario</h1>
<table>
<form action="confirm.php" method="POST">

    <tr>
    <td class="tdtitulo">Nombre completo:</td>
    <td><input type="text" name="nombre" required/></td>
    </tr>

    <tr>
    <td class="tdtitulo">Dirección:</td>
    <td><textarea name="comment" >Introduce los datos...</textarea></td>
    </tr>

    <tr>
    <td class="tdtitulo">Correo electrónico:</td>
    <td><input type="email" name="correo" placeholder="usuario@dominio.com" required/></td>
    </tr>

    <tr>
    <td class="tdtitulo">Contraseña:</td>
    <td><input type="password" name="password" maxlenght="8" required/></td>
    </tr>

    <tr>
    <td class="tdtitulo">Confirmar contraseña:</td>
    <td><input type="password" name="confirmar" maxlenght="8" required/></td>
    </tr>

    <tr>
    <td class="tdtitulo">Fecha de nacimiento:</td>
    <td>
    <select name="mes">
    <option value="Enero">Enero</option>
    <option value="Febrero">Febrero</option>
    <option value="Marzo">Marzo</option>
    <option value="Abril">Abril</option>
    <option value="Mayo">Mayo</option>
    <option value="Junio">Junio</option>
    <option value="Julio">Julio</option>
    <option value="Agosto">Agosto</option>
    <option value="Septiembre">Septiembre</option>
    <option value="Octubre">Octubre</option>
    <option value="Noviembre">Noviembre</option>
    <option value="Diciembre">Diciembre</option>
    </select>

    <select name="dia">
    <?php
    for($i=1;$i<=31;$i++){
        echo "<option value='$i'>$i</option>";
    }
    ?>
    </select>


    <input type="text" name="ano" size="2" required/> (yyyy)

    </td>
    </tr>

    <tr>
    <td class="tdtitulo">Sexo:</td>
    <td> <input type="radio" name="sexo" /> Hombre
    <input type="radio" name="sexo" /> Mujer</td>

    </tr>
<tr>
<td id="tdcenter">Por favor, elige los temas de interes:</td>
 <td>
    <input type="checkbox" name="interes[]" value="Ficción">Ficción
    <input type="checkbox" name="interes[]" value="Terror">Terror<br>
    <input type="checkbox" name="interes[]" value="Suspense">Suspense 
     <input type="checkbox" name="interes[]" value="Acción">Acción<br>
    <input type="checkbox" name="interes[]" value="Comedía">Comedía
</td>
</tr>

<tr>
<td class="tdtitulo">Selecciona tus aficiones:</td>
 <td>
 <select multiple name="aficiones">
    <option value="Deporte-aire-libre">Deporte-aire-libre</option>
    <option value="Deporte-aventura">Deporte-aventura</option>
    <option value="Musica-Pop">Musica-Pop</option>
    <option value="Musica-Rock">Musica-Rock</option>
    <option value="Fotografia">Fotografia</option>
    
    </select>
</td>
</tr>
    
    

    <br><input class="boton" type="reset" value="Borrar">
    <input class="boton" type="submit" value="Enviar"/>

</form>
</table>
</body>

</html>  