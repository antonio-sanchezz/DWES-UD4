<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    @$mysqli = mysqli_connect('localhost','developer','developer','agenciaviajes');

    $error = mysqli_connect_errno();

    if ($error != null) {
        echo "<p>Error $error conectando a la base de datos: " . mysqli_connect_error() . "</p>";
        echo exit();
    }


    // INSERTAR FILA.
    $result = mysqli_query($mysqli, "INSERT INTO vuelos (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES ('Sevilla', 'Londres', '2021-02-02 11:00:00', 'Ryanair', 'R236')");

    if (!$result) {
        echo "La consulta no ha funcionado correctamente.";
    } else {
        echo "Se han insertado " . mysqli_affected_rows($mysqli) . " filas";
        echo "<br>";
        echo "El id del último elemento añadido es " . mysqli_insert_id($mysqli);
        echo "<br>";
    }

    // ACTUALIZAR FILA.
    $result = mysqli_query($mysqli, "UPDATE vuelos SET Companya = 'Iberia' WHERE Destino = 'Londres'");

    if (!$result) {
        echo "La consola no ha funcionado correctamente.";
    } else {
        echo "Se han actualizado " . mysqli_affected_rows($mysqli) . " filas.";
        echo "<br>";
    }

    // BORRAR FILA.
    $result = mysqli_query($mysqli, "DELETE FROM vuelos WHERE Destino = 'Londres' AND Companya = 'Iberia'");
    
    if (!$result) {
        echo "La consulta no ha funcionado correctamente.";
    } else {
        echo "Se han borrado " . mysqli_affected_rows($mysqli) . " filas.";
        echo "<br>";
    }

    mysqli_close($mysqli);

    ?>
</body>
</html>