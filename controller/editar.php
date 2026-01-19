<?php
require_once __DIR__ . '/../model/Articulo.php';
$id = $_GET['id'];
$articulo = Articulo::getById($id);
include __DIR__ . '/../view/formArticulo.php';
?>
