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

    echo "<table>";
    echo    "<tr>";
    echo        "<th>Nombre</th>";
    echo        "<th>Apellido</th>";
    echo        "<th>Dirección</th>";
    echo    "</tr>";

    $sql = "SELECT nombre, apellido1, direccion FROM turista";

    $turistas = $conn->query($sql);

    // PDO::FETCH_ASSOC: Array asociativo.
    while($turista = $turistas->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $turista['nombre'] . "</td>";
        echo "<td>" . $turista['apellido1'] . "</td>";
        echo "<td>" . $turista['direccion'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";

    echo "<table>";
    echo    "<tr>";
    echo        "<th>Nombre</th>";
    echo        "<th>Apellido</th>";
    echo        "<th>Dirección</th>";
    echo    "</tr>";

    $sql = "SELECT nombre, apellido1, direccion FROM turista";

    $turistas = $conn->query($sql);

    // PDO::FETCH_NUM: Array con claves numéricas.
    while($turista = $turistas->fetch(PDO::FETCH_NUM)) {
        echo "<tr>";
        echo "<td>" . $turista[0] . "</td>";
        echo "<td>" . $turista[1] . "</td>";
        echo "<td>" . $turista[2] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";

    echo "<table>";
    echo    "<tr>";
    echo        "<th>Nombre</th>";
    echo        "<th>Apellido</th>";
    echo        "<th>Dirección</th>";
    echo    "</tr>";

    $sql = "SELECT nombre, apellido1, direccion FROM turista";

    $turistas = $conn->query($sql);

    // PDO::FETCH_BOTH: Por defecto, array con claves numéricas y asociativas.
    while($turista = $turistas->fetch(PDO::FETCH_BOTH)) {
        echo "<tr>";
        echo "<td>" . $turista[0] . "</td>";
        echo "<td>" . $turista[1] . "</td>";
        echo "<td>" . $turista[2] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";

    echo "<table>";
    echo    "<tr>";
    echo        "<th>Nombre</th>";
    echo        "<th>Apellido</th>";
    echo        "<th>Dirección</th>";
    echo    "</tr>";

    $sql = "SELECT nombre, apellido1, direccion FROM turista";

    $turistas = $conn->query($sql);

    // PDO::FETCH_OBJ: Objeto cuyas propiedades se corresponden con los campos.
    while($turista = $turistas->fetch(PDO::FETCH_OBJ)) {
        echo "<tr>";
        echo "<td>" . $turista->nombre . "</td>";
        echo "<td>" . $turista->apellido1 . "</td>";
        echo "<td>" . $turista->direccion . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";

    echo "<table>";
    echo    "<tr>";
    echo        "<th>Nombre</th>";
    echo        "<th>Apellido</th>";
    echo        "<th>Dirección</th>";
    echo    "</tr>";

    $sql = "SELECT nombre, apellido1, direccion FROM turista";

    $turistas = $conn->query($sql);

    // PDO::FETCH_LAZY: Devuelve tanto el objeto como el array con clave dual anterior.
    while($turista = $turistas->fetch(PDO::FETCH_LAZY)) {
        echo "<tr>";
        echo "<td>" . $turista->nombre . "</td>";
        echo "<td>" . $turista->apellido1 . "</td>";
        echo "<td>" . $turista->direccion . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";

    echo "<table>";
    echo    "<tr>";
    echo        "<th>Nombre</th>";
    echo        "<th>Apellido</th>";
    echo        "<th>Dirección</th>";
    echo    "</tr>";

    $stmt = $conn->prepare("SELECT nombre, apellido1, direccion FROM turista");

    $stmt->execute();

    $stmt->bindColumn('nombre', $nombre);
    $stmt->bindColumn('apellido1', $apellido1);
    $stmt->bindColumn('direccion', $direccion);

    // PDO::FETCH_BOUND: Devuelve true y asigna los valores del registro a variables, según se indique con el método bindColumn. Este método debe ser llamado una vez por cada columna.
    while($row = $stmt->fetch(PDO::FETCH_BOUND)) {
        echo "<tr>";
        echo "<td>" . $nombre . "</td>";
        echo "<td>" . $apellido1 . "</td>";
        echo "<td>" . $direccion . "</td>";
        echo "</tr>";
    }
    echo "</table>";

} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

$conn = null;

?>
</body>
</html>