<?php

$host = "db";
$user = "root";
$password = "root";
$database = "practica";

$conn = new mysqli($host, $user, $password, $database);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hola Mundo</title>
</head>
<body>

<h1>Hola Mundo</h1>

<?php
if ($conn->connect_error) {
    echo "<p>Error al conectar con MySQL: " . $conn->connect_error . "</p>";
} else {
    echo "<p>Conexión exitosa a la base de datos MySQL usando Docker Compose.</p>";
}

$conn->close();
?>

</body>
</html>