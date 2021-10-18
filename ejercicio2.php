<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
<?php

// Genera un nueva linea en el archivo, se comenta para que no se repita tantas veces.
//$file = fopen("locations.csv", "a");
//fputcsv($file, array('Sevilla', '37.3826,-5.99629'));
//fclose($file);

$file = fopen("locations.csv", "r");

$fila = true;

while($fila) {
    $fila = fgetcsv($file);
    if (!empty($fila)) {
        echo "<tr>";
        echo "<td>" . $fila[0] . "</td>";
        echo "<td>" . $fila[1] . "</td>";
        echo "</tr>";
    }
}

if (fgetcsv($file)) {
    fclose($file);
}

?>
    </table>
</body>
</html>