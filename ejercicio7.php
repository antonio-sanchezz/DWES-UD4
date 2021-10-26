<?php

function connectionDB() {

    $mysqli = new mysqli('localhost','developer','developer','agenciaviajes');

    if ($mysqli->error != null) {
        echo "<p>Error $mysqli->error conectando a la base de datos: " . mysqli_connect_error() . "</p>";
        echo exit();
    }

    return $mysqli;

}

function creaVuelo($origen, $destino, $fecha, $companya, $modeloAvion) {

    $db = connectionDB();
    $execute = false;
    
    $sql = "INSERT INTO vuelos (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES (?, ?, ?, ?, ?)";

    $db->stmt_init();

    if ($stmt = $db->prepare($sql)) {
        $stmt->bind_param("sssss", $origen, $destino, $fecha, $companya, $modeloAvion);
        $execute = $stmt->execute();
        $stmt->close();
    }

    $db->close();
    return $execute;
}

//creaVuelo("Valencia", "Alaska", "2021-10-21 09:16:52", "Iberia", "R536");

function modificaDestino($id, $nuevoDestino) {
    
    $db = connectionDB();
    $execute = false;
    
    $sql = "UPDATE vuelos SET Destino = ? WHERE id = ?";

    $db->stmt_init();

    if ($stmt = $db->prepare($sql)) {
        $stmt->bind_param("si", $nuevoDestino, $id);
        $execute = $stmt->execute();
        $stmt->close();
    }

    $db->close();
    return $execute;
}

//modificaDestino(23, "Nevada");

function modificaCompanya($id, $nuevaCompanya) {

    $db = connectionDB();
    $execute = false;
    
    $sql = "UPDATE vuelos SET Companya = ? WHERE id = ?";

    $db->stmt_init();

    if ($stmt = $db->prepare($sql)) {
        $stmt->bind_param("si", $nuevaCompanya, $id);
        $execute = $stmt->execute();
        $stmt->close();
    }

    $db->close();
    return $execute;
}

//modificaCompanya(23, "AvionesVoladoresSA");

function eliminaVuelo($id) {

    $db = connectionDB();
    $execute = false;
    
    $sql = "DELETE FROM vuelos WHERE id = ?";

    $db->stmt_init();

    if ($stmt = mysqli_prepare($db, $sql)) {
        $stmt->bind_param("i", $id);
        $execute = $stmt->execute();
        $stmt->close();
    }

    $db->close();
    return $execute;
}

eliminaVuelo(21);

function extraeVuelos() {

    $db = connectionDB();

    $sql = "SELECT * FROM vuelos";

    $result = $db->query($sql);
    $db->close();

    return $result;
}

// Extraemos todos los vuelos.
$vuelos = extraeVuelos();
while ($row = $vuelos->fetch_assoc()) {
    echo "ID:" . $row['id'] . " - El vuelo con origen " . $row['Origen'] . " y destino " . $row['Destino'] . " tiene fecha prevista " . $row['Fecha'] . " y es operado por la compañía " . $row['Companya'] . " con el modelo de avion " . $row['ModeloAvion'] . "<br>";
    echo "<br>";
}

?>