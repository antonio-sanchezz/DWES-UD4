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
//fwrite($file, "Antonio Sanchez Espinosa");
//fclose($file);

$file = fopen("archivoEj1.txt","r");

while(!feof($file)) {
    echo "<tr>";
    echo "<td>" . fgets($file) . "</td>";
    echo "</tr>";
}

if (feof($file)) {
    fclose($file);
}

?>
</table>
</body>
</html>