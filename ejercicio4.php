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
} else {
    //echo "Conectado correctamente.";
    echo "<br>";
}

$query = "SELECT * FROM vuelos";

$result = mysqli_query($mysqli, $query);

//var_dump($result);
echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Origen</th>";
echo "<th>Destino</th>";
echo "<th>Fecha</th>";
echo "<th>Compañia</th>";
echo "<th>Modelo Avión</th>";
echo "</tr>";

// fetch_assoc
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['Origen'] . "</td>";
        echo "<td>" . $row['Destino'] . "</td>";
        echo "<td>" . $row['Fecha'] . "</td>";
        echo "<td>" . $row['Companya'] . "</td>";
        echo "<td>" . $row['ModeloAvion'] . "</td>";
        echo "</tr>";
    }
}

echo "</table>";

echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Origen</th>";
echo "<th>Destino</th>";
echo "<th>Fecha</th>";
echo "<th>Compañia</th>";
echo "<th>Modelo Avión</th>";
echo "</tr>";
echo "<br>";

$query = "SELECT * FROM vuelos";

$result = mysqli_query($mysqli, $query);

// fetch_object
if ($result) {
    while ($obj = mysqli_fetch_object($result)) {
        echo "<tr>";
        echo "<td>" . $obj->id . "</td>";
        echo "<td>" . $obj->Origen . "</td>";
        echo "<td>" . $obj->Destino . "</td>";
        echo "<td>" . $obj->Fecha . "</td>";
        echo "<td>" . $obj->Companya . "</td>";
        echo "<td>" . $obj->ModeloAvion . "</td>";
        echo "</tr>";
    }
}

echo "</table>";

echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Origen</th>";
echo "<th>Destino</th>";
echo "<th>Fecha</th>";
echo "<th>Compañia</th>";
echo "<th>Modelo Avión</th>";
echo "</tr>";
echo "<br>";

$query = "SELECT * FROM vuelos";

$result = mysqli_query($mysqli, $query);

// fetch_array
if ($result) {
    while ($array = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $array['id'] . "</td>";
        echo "<td>" . $array['Origen'] . "</td>";
        echo "<td>" . $array['Destino'] . "</td>";
        echo "<td>" . $array['Fecha'] . "</td>";
        echo "<td>" . $array['Companya'] . "</td>";
        echo "<td>" . $array['ModeloAvion'] . "</td>";
        echo "</tr>";
    }
}

echo "</table>";

echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Origen</th>";
echo "<th>Destino</th>";
echo "<th>Fecha</th>";
echo "<th>Compañia</th>";
echo "<th>Modelo Avión</th>";
echo "</tr>";
echo "<br>";

$query = "SELECT * FROM vuelos";

$result = mysqli_query($mysqli, $query);

// fetch_row
if ($result) {
    while ($rowR = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<td>" . $rowR[0] . "</td>";
        echo "<td>" . $rowR[1] . "</td>";
        echo "<td>" . $rowR[2] . "</td>";
        echo "<td>" . $rowR[3] . "</td>";
        echo "<td>" . $rowR[4] . "</td>";
        echo "<td>" . $rowR[5] . "</td>";
        echo "</tr>";
    }
}

echo "</table>";

mysqli_close($mysqli);
?>
</body>
</html>