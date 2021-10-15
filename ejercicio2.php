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
        <tr>
            <th>Location</th>
            <th>Latitude / Longitude</th>
        </tr>
<?php

// Genera un nueva linea en el archivo, se comenta para que no se repita tantas veces.
//$file = fopen("locations.csv", "a");
//fputcsv($file, array("Sevilla", "37.3826,-5.99629"));
//fclose($file);


$file = fopen("locations.csv", "r");

while(fgetcsv($file)) {
    echo "<tr>";
    echo "<td>" . fgetcsv($file)[0] . "</td>";
    echo "<td>" . fgetcsv($file)[1] . "</td>";
    echo "</tr>";
}

?>
    </table>
</body>
</html>