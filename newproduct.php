<?php
foreach ($_POST as $key => $value) {
    echo "Field \"" . htmlspecialchars($key) . "\" is \"" . htmlspecialchars($value) . "\"<br>";
}

switch ($_POST['api']) {
    case "crearNuevoproducto":
        crearProducto($_POST['nombre'], $_POST['coste'], $_POST['localizacion'], $_POST['tallas'], $_POST['color'], $_POST['imagen'], $_POST['textArea'], $_POST['nameStore'], $_POST['addLink']);
        break;
}

function crearProducto($nombre, $coste, $localizacion, $tallas, $color, $imagen, $textArea, $nameStore, $addLink)
{

    $conn = new mysqli('localhost', 'root', '', 'pbd');
    $sql = "INSERT INTO tablaproducto(nombre,coste,localizacion,tallas,color,imagen,textArea,nameStore,link) VALUES('" . $nombre . "','" . $coste . "','" . $localizacion . "','" . $tallas . "','" . $color . "','" . $imagen . "','" . $textArea . "','" . $nameStore . "','" . $addLink . "')";
    echo $sql;
    if ($conn->multi_query($sql) === TRUE) {
        $last_id = $conn->insert_id;
    }
    $conn->close();
}

//hacer define("dataloquesea",'localhost') fuera sin comillas dobles el dataloquesea.