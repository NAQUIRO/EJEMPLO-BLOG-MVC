<?php
require_once __DIR__ . '/../model/Articulo.php';
$id = $_GET['id'];
Articulo::delete($id);
header("Location: index.php");
exit;
?>
