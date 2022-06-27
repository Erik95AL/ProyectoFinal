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
    $producto = new stdClass();
    $conn = new mysqli('localhost', 'root', '', 'pbd');
    $sql = "SELECT id FROM tablaproducto ;";
    $result = $conn->query($sql);
    if ($result->num_rows >= 1) {
        while ($row = $result->fetch_assoc()) {
            echo '<a href="./producto.php?id=' . $row['id'] . '"><button>' . $row['id'] . '</button></a>';
        }
    }
    ?>
    <?php


    $producto = new stdClass();
    $conn = new mysqli('localhost', 'root', '', 'pbd');
    $sql = "SELECT * FROM tablaproducto WHERE id='" . $_GET['id'] . "' ;";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $producto->id = $row['id'];
            $producto->nombre = $row['nombre'];
            $producto->coste = $row['coste'];
            $producto->localizacion = $row['localizacion'];
            $producto->tallas = $row['tallas'];
            $producto->color = $row['color'];
            $producto->imagen = $row['imagen'];
            $producto->textArea = $row['textArea'];
            $producto->nameStore = $row['nameStore'];
            $producto->link = $row['link'];
        }
    } else {
        echo "Error: id not found.";
    }
    $conn->close();
    echo '<p>Id del producto=' . $producto->id . '</p>';
    echo '<img src="' . $producto->imagen . '"/>';
    echo '<h2>' . $producto->nombre . '<h2/>';
    echo '<h3>' . $producto->coste . '€<h3/>';
    echo '<h3>' . $producto->tallas . '<h3/>';
    echo '<hr/>';
    echo '<p>' . $producto->textArea . '<p/>';
    echo '<h3>' . $producto->nameStore . '<h3/>';
    echo '<a href="https://' . $producto->link . '">' . $producto->link . '<a/>';
    echo '<h3>' . $producto->localizacion . '<h3/>';



    ?>

</body>

</html>