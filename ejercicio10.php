<?php

$servidor = "localhost";
$baseDatos = "agenciaviajes";
$usuario = "developer";
$pass = "developer";

try {

    $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);

    $conn->beginTransaction();
    $last_id = 0;

    // INSERTAR 3 TURISTAS DE LA MISMA FAMILIA.
    $turistas = $conn->exec("INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Antonio', 'Sanchez', 'Espinosa', 'Sevilla', '123456789')");
    if($conn->lastInsertId() > 0) echo "Insertado con éxito.<br>";
    $turistas = $conn->exec("INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('María', 'Sanchez', 'Espinosa', 'Sevilla', '987456123')");
    if($conn->lastInsertId() > 0) echo "Insertado con éxito.<br>";
    $turistas = $conn->exec("INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Pablo', 'Sanchez', 'Espinosa', 'Sevilla', '654123789')");
    if($conn->lastInsertId() > 0) echo "Insertado con éxito.<br>";
    
    $conn->commit();

} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
    $conn->rollBack();
}

$conn = null;

?>