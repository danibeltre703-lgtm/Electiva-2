<?php

$host = getenv("DB_HOST") ?: "db";
$port = getenv("DB_PORT") ?: "3306";
$user = getenv("DB_USER") ?: "root";
$password = getenv("DB_PASSWORD") ?: "root";
$database = getenv("DB_NAME") ?: "practica";

$conn = new mysqli($host, $user, $password, $database, $port);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación Docker</title>
</head>
<body>
    <h1>Hola Mundo</h1>

    <?php if ($conn->connect_error): ?>
        <p>Error al conectar con MySQL:</p>
        <p><?php echo htmlspecialchars($conn->connect_error); ?></p>
    <?php else: ?>
        <p>Conexión exitosa a la base de datos MySQL.</p>
    <?php endif; ?>
</body>
</html>

<?php
$conn->close();
?>