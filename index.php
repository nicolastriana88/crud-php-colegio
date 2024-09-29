<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP Colegio</title>
    <!--ESTILOS -->
    <link href = "style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Formulario -->
<form method ="post" action="insertar_datos.php">
<label for = "nombre">Nombre del estudiante</label>
<input type="text" name="nombre" placeholder="Escriba aqui el nombre del estudiante">
<br>
<label for = "nota">Nota</label>
<input type="text" name="nota" placeholder="Escriba aquí la nota">
<br>
<input type="submit" value="Enviar">Click aqui para generar nuevos datos.
</form>
</body>
</html>
