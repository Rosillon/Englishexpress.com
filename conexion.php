<?php
// Datos de conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EnglishExpress";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
