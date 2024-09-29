<?php

// RECIBIR INFORMACION MEDIANTE POST DEL FORM DE INDEX.PHP

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    $nota = $_POST['nota'];
}

// INSERTAR INFORMACION EN BASE DE DATOS

$query = "INSERT INTO estudiantes (nombre, nota) VALUES ($1, $2)";
$result = pg_query_params($conexion, $query, array($nombre,$nota));

if(result){
    echo "Registro de datos exitoso";
}else{
    echo "Error" . pg_last_error($conexion);
}

// CERRAR CONEXON

pg_close($conexion);