<?php
require_once __DIR__ . '/../model/Articulo.php';
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

$articulo = new Articulo($titulo, $contenido);
$articulo->insert();

header("Location: index.php");
exit;
?>
