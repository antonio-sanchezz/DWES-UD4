<?php

function connectionDB() {

    $mysqli = mysqli_connect('localhost','developer','developer','agenciaviajes');

    $error = mysqli_connect_errno();

    if ($error != null) {
        echo "<p>Error $error conectando a la base de datos: " . mysqli_connect_error() . "</p>";
        echo exit();
    }

    return $mysqli;

}

function crearVuelo($origen, $destino, $fecha, $companya, $modeloAvion) {

    $db = connectionDB();
    
    $sql = "INSERT INTO vuelos (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES (?, ?, ?, ?, ?)";

    $consulta = mysqli_stmt_init($db);

    if ($stmt = mysqli_prepare($db, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssss", $origen, $destino, $fecha, $companya, $modeloAvion);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        echo "Vuelo creado con éxito.<br>";
    } else {
        echo "Error al crear el vuelo.<br>";
    }

}

function modificaDestino($id, $nuevoDestino) {
    
    $db = connectionDB();
    
    $sql = "UPDATE vuelos SET Destino = ? WHERE id = ?";

    $consulta = mysqli_stmt_init($db);

    if ($stmt = mysqli_prepare($db, $sql)) {
        mysqli_stmt_bind_param($stmt, "si", $nuevoDestino, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        echo "Destino modificado con éxito.<br>";
    } else {
        echo "Error al modificar el destino.<br>";
    }

}

function modificaCompanya($id, $nuevaCompanya) {

    $db = connectionDB();
    
    $sql = "UPDATE vuelos SET Companya = ? WHERE id = ?";

    $consulta = mysqli_stmt_init($db);

    if ($stmt = mysqli_prepare($db, $sql)) {
        mysqli_stmt_bind_param($stmt, "si", $nuevaCompanya, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        echo "Compañia modificada con éxito.<br>";
    } else {
        echo "Error al modificar la compañia.<br>";
    }

}

function eliminaVuelo($id) {

    $db = connectionDB();
    
    $sql = "DELETE FROM vuelos WHERE id = ?";

    $consulta = mysqli_stmt_init($db);

    if ($stmt = mysqli_prepare($db, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        echo "Vuelo eliminado con éxito.<br>";
    } else {
        echo "Error al eliminar el vuelo.<br>";
    }

}

function extraeVuelos() {

    $db = connectionDB();

    $sql = "SELECT * FROM vuelos";

    $consulta = mysqli_stmt_init($db);

    if ($stmt = mysqli_prepare($db, $sql)) {

        mysqli_stmt_execute($stmt);

        mysqli_stmt_bind_result($stmt, $id, $origen, $destino, $fecha, $companya, $modeloAvion);

        while(mysqli_stmt_fetch($stmt)) {
            print "El vuelo con origen $origen y destino $destino tiene fecha prevista $fecha y es operado por la compañía $companya con el modelo de avion $modeloAvion <br>";
        }

        mysqli_stmt_close($stmt);
    }

}
?>