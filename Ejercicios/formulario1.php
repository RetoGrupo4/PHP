<html>

<head>

<title>
    Formulario de alumno
</title>

</head>
<body>

<form action="visor1.php" method="POST">
    Nombre: <input type="text" name="nombre" placeholder="Introduzca su nombre" size="12" required/>
    <br>Edad: <input type="text" name="edad" placeholder="Introduzca su edad" size="10" required/>
    <br>Telefono: <input type="text" name="telefono" maxlength = "9" required/>
    <br>Email:  <input type="email" name="email" placeholder="usuario@dominio.com" size="30"/>
    <br>Sexo: <input type="radio"  name="sexo" value="Mujer" checked/> Femenino
    <input type="radio" name="sexo" value="Mujer"/> Masculino

     <br>Provincia: <select name="provincia">
        <option value="Bizkaia" selected>Bizkaia</option>
        <option value="Gipuzkoa" selected>Gipuzkoa</option>
        <option value="Alava" selected>Alava</option>
    </select>

     <br>Cursos: <input type="checkbox" name="cursos[]" value="1DW3" checked>1DW3
    <input type="checkbox" name="cursos[]" value="2DW3">2DW3
    <input type="checkbox" name="cursos[]" value="2DM3">2DM3

    <br>Idioma: <input type="radio"  name="idioma" value="Castellano" checked/> Castellano
    <input type="radio" name="idioma" value="Euskera"/> Euskera

    <br><input type="submit" value="Enviar información"/>

    
</form>

</body>

</html>  