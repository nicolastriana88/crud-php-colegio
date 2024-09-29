<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Se Reciben los datos del formulario
    $nombre = $_POST['nombre'];
    $nota = $_POST['nota'];

    // Mostrar los datos
    echo "Nombre del estudiante: " . htmlspecialchars($nombre) . "<br>";
    echo "Nota: " . htmlspecialchars($nota) . "<br>";
}
?>
