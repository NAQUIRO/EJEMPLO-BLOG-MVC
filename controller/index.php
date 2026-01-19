<?php
require_once __DIR__ . '/../model/Articulo.php';
$articulos = Articulo::getArticulos();
include __DIR__ . '/../view/listado.php';
?>
