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

    require_once("ejercicio6.php");
    //require_once("ejercicio7.php");

    // Creamos un nuevo vuelo.
    creaVuelo("Sevilla", "Alaska", "2021-10-21 09:16:52", "Iberia", "R536");

    // Modificamos el destino de un vuelo.
    modificaDestino(7, "Italia");

    // Modificamos la compañia de un vuelo.
    modificaCompanya(7, "YoVuelo");

    // Eliminamos un vuelo.
    eliminaVuelo(18);

    // Extraemos todos los vuelos.
    $vuelos = extraeVuelos();
    while ($row = mysqli_fetch_assoc($vuelos)) {
        echo "ID:" . $row['id'] . " - El vuelo con origen " . $row['Origen'] . " y destino " . $row['Destino'] . " tiene fecha prevista " . $row['Fecha'] . " y es operado por la compañía " . $row['Companya'] . " con el modelo de avion " . $row['ModeloAvion'] . "<br>";
        echo "<br>";
    }

    ?>
</body>
</html>