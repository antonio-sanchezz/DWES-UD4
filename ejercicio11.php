<?php

try {

    // CONEXION A LA BASE DE DATOS.
    function db() {
        $servidor = "localhost";
        $baseDatos = "agenciaviajes";
        $usuario = "developer";
        $pass = "developer";
        $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);

        return $conn;
    }

    // INSERTAR UNA NUEVA FILA.
    function creaTurista($nombre, $apellido1, $apellido2, $direccion, $telefono) {
        $conn = db();
        $id = null;

        $sqlInsert = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sqlInsert);
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $apellido1);
        $stmt->bindParam(3, $apellido2);
        $stmt->bindParam(4, $direccion);
        $stmt->bindParam(5, $telefono);

        $stmt->execute();
        $last_id = $conn->lastInsertId();

        $conn = null;

        return $last_id;
    }

    // OBTENER UN TURISTA MEDIANTE SU ID.
    function extraeTurista($id) {
        $conn = db();
        $turista = null;

        $sqlQuery = "SELECT * FROM turista WHERE id = ?";
        $stmt = $conn->prepare($sqlQuery);
        $stmt->bindParam(1, $id);

        $stmt->execute();

        $turistas = $stmt->fetchAll();

        $conn = null;

        return $turistas;
    }

    // EXTREAEMOS TURISTAS
    function extraeTuristas() {
        $conn = db();

        $sqlQuery = "SELECT * FROM turista";
        $stmt = $conn->query($sqlQuery);

        $turistas = $stmt->fetchAll();

        $conn = null;

        return $turistas;
    }

    // ACTUALIZAMOS TURISTA (ID, DIRECCION, TELEFONO).
    function actualizaTurista($id, $direccion, $telefono) {
        $conn = db();
        $execute = false;

        $sqlUpdate = "UPDATE turista SET direccion=?,telefono=? WHERE id=?";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->bindParam(1, $direccion);
        $stmt->bindParam(2, $telefono);
        $stmt->bindParam(3, $id);

        $execute = $stmt->execute();

        $conn = null;

        return $execute;
    }

    // ELIMINAR UN TURISTA POR ID.
    function eliminaTurista($id) {
        $conn = db();

        $sqlDel = "DELETE FROM turista WHERE id=?";
        $stmt = $conn->prepare($sqlDel);
        $stmt->bindParam(1, $id);

        $stmt->execute();
        
        $conn = null;
    }

} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

// CREAR TURISTA (PRUEBA).
echo(creaTurista('Antonio', 'Sanchez', 'Espinosa', 'Sevilla', '123456789')) . "<br>";

// EXTRAER TURISTA (PRUEBA).
$turistas = extraeTurista(1);
foreach($turistas as $turista) {
    echo "Nombre: " . $turista['nombre'] . " " . $turista['apellido1'] . " " . $turista['apellido2'] . " Dirección: " . $turista['direccion'] . " Teléfono: " . $turista['telefono'] . "<br>";
}

// EXTREAEMOS TURISTAS (PRUEBA).
$turistas = extraeTuristas();

foreach($turistas as $turista) {
    echo "Nombre: " . $turista['nombre'] . " " . $turista['apellido1'] . " " . $turista['apellido2'] . " Dirección: " . $turista['direccion'] . " Teléfono: " . $turista['telefono'] . "<br>";
}

// ACTUALIZAMOS TURISTA (PRUEBA)(ID, DIRECCION, TELEFONO).
echo(var_export(actualizaTurista(1,'Sevilla','654123789')));

// ELIMINAR UN TURISTA (PRUEBA).
eliminaTurista(45);

?>