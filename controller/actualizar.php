<?php
require_once __DIR__ . '/../model/Articulo.php';
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

Articulo::update($id, $titulo, $contenido);
header("Location: index.php");
exit;
?>
