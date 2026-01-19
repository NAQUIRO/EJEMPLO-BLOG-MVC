<?php
require_once __DIR__ . '/BlogDB.php';

class Articulo {
    private $id;
    private $titulo;
    private $contenido;
    private $fecha_publicacion;

    public function __construct($titulo, $contenido, $fecha_publicacion = null, $id = null) {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->id = $id;
    }

    // Getters
    public function getId() { return $this->id; }
    public function getTitulo() { return $this->titulo; }
    public function getContenido() { return $this->contenido; }
    public function getFecha() { return $this->fecha_publicacion; }

    // Inserta un nuevo artículo
    public function insert() {
        $conn = BlogDB::connectDB();
        $sql = "INSERT INTO articulos (titulo, contenido, fecha_publicacion) VALUES (?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$this->titulo, $this->contenido]);
    }

    // Actualiza un artículo existente
    public static function update($id, $titulo, $contenido) {
        $conn = BlogDB::connectDB();
        $sql = "UPDATE articulos SET titulo = ?, contenido = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$titulo, $contenido, $id]);
    }

    // Elimina un artículo
    public static function delete($id) {
        $conn = BlogDB::connectDB();
        $sql = "DELETE FROM articulos WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
    }

    // Obtiene todos los artículos
    public static function getArticulos() {
        $conn = BlogDB::connectDB();
        $sql = "SELECT * FROM articulos ORDER BY fecha_publicacion DESC";
        $stmt = $conn->query($sql);
        $articulos = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $articulos[] = new Articulo($row['titulo'], $row['contenido'], $row['fecha_publicacion'], $row['id']);
        }

        return $articulos;
    }

    // Obtiene un artículo por ID
    public static function getById($id) {
        $conn = BlogDB::connectDB();
        $sql = "SELECT * FROM articulos WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) return null;
        return new Articulo($row['titulo'], $row['contenido'], $row['fecha_publicacion'], $row['id']);
    }
}
?>
