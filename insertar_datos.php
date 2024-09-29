<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    $nota = $_POST['nota'];
}

// CONSULTA BASE DE DATOS

$query = "INSERT INTO estudiantes (nombre, nota) VALUES ($1, $2)";
$result = pg_query_params($conexion, $query, array($nombre,$nota));

if(result){
    echo "Registro exitoso";
}else{
    echo "Error" . preg_last_error($conexion);
}

// CERRAR CONEXON

pg_close($conexion);