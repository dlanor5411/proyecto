<?php
// conexion.php
$servername = "localhost";
$username = "root"; // Usuario por defecto de XAMPP
$password = "";     // Contraseña por defecto de XAMPP (vacía)
$dbname = "asistencia_docentes_upea";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
//echo "Conexión exitosa a la base de datos."; // Solo para pruebas
?>