<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
<?php

$servidor = "localhost";
$baseDatos = "agenciaviajes";
$usuario = "developer";
$pass = "developer";

try {

    $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);

    
    // INSERTAR UNA NUEVA FILA.
    $sqlInsert = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Antonio', 'Sanchez', 'Espinosa', 'Sevilla', '123456789')";

    $turistas = $conn->exec($sqlInsert);
    $last_id = $conn->lastInsertId();

    echo "Se han añadido $turistas cliente nuevo con el id: $last_id <br>";
    

    // ACTUALIZAR UNA FILA.
    $sqlUpd = "UPDATE turista SET nombre='Felix',apellido1='Rodriguez',apellido2='de la Fuente',direccion='Malaga',telefono='111000111' WHERE id=2";

    $turistasActualizados = $conn->exec($sqlUpd);

    echo "Se han modificado $turistasActualizados turistas.<br>"; 

    // BORRAR FILA.
    $sqlDel = "DELETE FROM turista WHERE id=3";
    $turistasEliminados = $conn->exec($sqlDel);

    echo "Se han eliminado $turistasEliminados turistas.<br>"; 

} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

$conn = null;

?>
</body>
</html>