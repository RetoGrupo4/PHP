<html>

<head>

<title>
    Formulario de alumno
</title>

</head>
<body>

<form action="visor2.php" method="POST">
    Nombre: <input type="text" name="nombre" placeholder="Introduzca su nombre" size="12" required/>
    <br>Apellidos: <input type="text" name="apellido" placeholder="Introduzca su nombre" size="12" required/>

    <br>Estas contento en el fp de txurdinaga con sus instalaciones?
    <br> <input type="radio"  name="fp" value="Si" checked/> Si
    <input type="radio" name="fp" value="No"/> No
    <input type="radio" name="fp" value="Sia"/> Si, y no cambiaria nada
    <input type="radio" name="fp" value="Noa"/> No, muchas cosas que mejorar
     

     <br>Cursos en los que has cursado hasta ahora en txurdinaga?<br>
    <input type="checkbox" name="cursos[]" value="1DW3" checked>1DW3
    <input type="checkbox" name="cursos[]" value="2DW3">2DW3
    <input type="checkbox" name="cursos[]" value="2DM3">2DM3
    <input type="checkbox" name="cursos[]" value="1SM2">1SM2
    <input type="checkbox" name="cursos[]" value="2SM2">2SM2
    <input type="checkbox" name="cursos[]" value="ASW3">ASW3


    <br><input type="submit" value="Enviar información"/>

    
</form>

</body>

</html>  