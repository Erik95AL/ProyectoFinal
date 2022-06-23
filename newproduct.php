<?php
switch ($_POST['api']) {

    case "crearNuevoproducto":
        crearProducto($_POST['nombre'], $_POST['coste'], $_POST['localizacion'], $_POST['tallas'], $_POST['color'], $_POST['imagen'], $_POST['textArea']);
        break;
}

function crearProducto($nombre, $coste, $localizacion, $tallas, $color, $imagen, $textArea)
{
    $conn = new mysqli('localhost', 'root', '', 'pbd');
    $sql = "INSERT INTO tablaproducto(nombre,coste,localizacion,tallas,color,imagen,textArea,reg_date) VALUES('" . $nombre . "','" . $coste . "','" . $localizacion . "','" . $tallas . "','" . $color . "','" . $imagen . "','" . $textArea . "')";
}

//hacer define("dataloquesea",'localhost') fuera sin comillas dobles el dataloquesea