<?php

// CONSTANTES CONEXION

$host = "localhost";
$port= "5432";
$user = "postgres";
$password ="admin";
$dbname = "colegio";

// CONSTANTE CONEXION

$conexion = pg_connect("host=$host port=$port user=$user password=$password dbname=$dbname");

// EXCEPCION DE ERRORES

if ($conexion){
    die("Conexion fallida." .pg_last_error());
}
?>