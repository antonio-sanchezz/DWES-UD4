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

$informacion = simplexml_load_file("archivoEj3.xml");
$contador = 0;

foreach($informacion as $elementoHijo) {
    if ($contador == 1) {
        printf("Titulo: %s Genero: %s Precio: %s Fecha: %s Descripcion: %s", $elementoHijo->title, $elementoHijo->genre, $elementoHijo->price, $elementoHijo->publish_date, $elementoHijo->description);
        break;
    }
    $contador++;
}

// Mostrar tabla con los datos del XML.
echo "<table border='1'>";
echo "<tr>";
echo "<th>Título</th>";
echo "<th>Género</th>";
echo "<th>Precio</th>";
echo "</tr>";

foreach($informacion as $elementoHijo) {
    echo "<tr>";
    echo "<td>" . $elementoHijo->title . "</td>";
    echo "<td>" . $elementoHijo->genre . "</td>";
    echo "<td>" . $elementoHijo->price . "</td>";
    echo "</tr>";
}
echo "</table><br>";


// Guardar un nuevo libro en el XML.
$catalogo = $informacion->addChild('book');
$catalogo->addAttribute("id", "bk113");
$catalogo->addChild("author", "Antonio Sanchez");
$catalogo->addChild("title", "New World");
$catalogo->addChild("genre", "Fantasy");
$catalogo->addChild("price", "19.95");
$catalogo->addChild("publish_date", "2021-10-18");
$catalogo->addChild("description", "The fantastic story of a programmer.");

$informacion->asXML("archivoEj3.xml");
$informacion = simplexml_load_file("archivoEj3.xml");

echo "<table border='1'>";
echo "<tr>";
echo "<th>Título</th>";
echo "<th>Género</th>";
echo "<th>Precio</th>";
echo "</tr>";
foreach($informacion as $elementoHijo) {
    echo "<tr>";
    echo "<td>" . $elementoHijo->title . "</td>";
    echo "<td>" . $elementoHijo->genre . "</td>";
    echo "<td>" . $elementoHijo->price . "</td>";
    echo "</tr>";
}

?>
</table>
</body>
</html>