<?php
class Database {
    private static $host = 'localhost';
    private static $dbName = 'amigo_secreto';
    private static $username = 'root';
    private static $password = 'root';
    private static $conn = null;

    public static function connect() {
        if (self::$conn == null) {
            try {
                self::$conn = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$dbName, self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erro ao conectar com o banco de dados: ' . $e->getMessage());
            }
        }
        return self::$conn;
    }

    public static function disconnect() {
        self::$conn = null;
    }
}
?>
