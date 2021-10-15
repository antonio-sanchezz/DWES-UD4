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
//$file = fopen("archivoEj1.txt", "a");
//fwrite($file, "\r\n"); // Salto de linea.
//fwrite($file, "Antonio Sanchez Espinosa,172,80,brown, white, brown,23,male,Earth,Human");
//fclose($file);

$file = fopen("archivoEj1.txt","r");

while(!feof($file)) {
    $row = explode(",", fgets($file));
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "<td>" . $row[5] . "</td>";
    echo "<td>" . $row[6] . "</td>";
    echo "<td>" . $row[7] . "</td>";
    echo "<td>" . $row[8] . "</td>";
    echo "<td>" . $row[9] . "</td>";
    echo "</tr>";
}

if (feof($file)) {
    fclose($file);
}

?>
</table>
</body>
</html>