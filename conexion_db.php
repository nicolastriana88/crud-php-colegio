<?php

$host = "localhost";
$port= "5432";
$user = "postgres";
$password ="admin";
$dbname = "colegio";

// Conexion

$conexion = pg_connect("host=$host port=$port user=$user password=$password dbname=$dbname");

// Excepcion

if ($conexion){
    die("Conexion fallida." .preg_last_error());
}
?>