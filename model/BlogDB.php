<?php
class BlogDB {
    private static $host = "localhost";
    private static $dbname = "blogdb";
    private static $user = "root"; // usuario por defecto en XAMPP
    private static $pass = "";     // sin contraseña por defecto
    private static $conn;

    public static function connectDB() {
        if (self::$conn === null) {
            try {
                self::$conn = new PDO(
                    "mysql:host=" . self::$host . ";dbname=" . self::$dbname,
                    self::$user,
                    self::$pass,
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
            } catch (PDOException $e) {
                die("❌ Error de conexión: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
?>
