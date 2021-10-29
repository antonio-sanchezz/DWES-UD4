<?php

$servidor = "localhost";
$baseDatos = "agenciaviajes";
$usuario = "developer";
$pass = "developer";

try {

    $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);

    $conn->beginTransaction();
    $contador = 0;

    // INSERTAR 3 TURISTAS DE LA MISMA FAMILIA.
    $turistas = $conn->exec("INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Antonio', 'Sanchez', 'Espinosa', 'Sevilla', '123456789')");
    $id_1 = $conn->lastInsertId();
    $turistas = $conn->exec("INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('María', 'Sanchez', 'Espinosa', 'Sevilla', '987456123')");
    $id_2 = $conn->lastInsertId();
    $turistas = $conn->exec("INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Pablo', 'Sanchez', 'Espinosa', 'Sevilla', '654123789')");
    $id_3 = $conn->lastInsertId();
    
    if ($id_1 > 0 && $id_2 > 0 && $id_3 > 0 && $id_1 != $id_2 && $id_1 != $id_3 &&  $id_2 != $id_3) {
        $conn->commit();   
    } else {
        $conn->rollBack();
    }

} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

$conn = null;

?>