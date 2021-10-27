<?php

$servidor = "localhost";
$baseDatos = "agenciaviajes";
$usuario = "developer";
$pass = "developer";

try {

    $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
    echo "Conectado correctamente";
    echo "<br>";

    // MOSTRAR TURISTAS.
    $sql = "SELECT * FROM turista";

    $turistas = $conn->query($sql);

    while($turista = $turistas->fetch()) {
        echo "EL turista de nombre " . $turista['nombre'] . " " . $turista['apellido1'] . " " . $turista['apellido2'] . " es de  " . $turista['direccion'] . "<br>";
    }

    // INSERTAR TURISTA.

    $sqlInsert = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Javier', 'Jiménez', 'Castillo', 'Dos Hermanas', '394304940')";

    $numeroClientes = $conn->exec($sqlInsert);
    $last_id = $conn->lastInsertId();

    echo "Se han añadido $numeroClientes cliente nuevo con el id: $last_id";


} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

$conn = null;

?>