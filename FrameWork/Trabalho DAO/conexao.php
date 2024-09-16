<?php
class Conexao {
    private static $con;

    static function conectar() {
        if (!self::$con) {
            try {
                self::$con = new PDO('mysql:host=localhost;dbname=loja', 'root', '');
                self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }
        return self::$con;
    }
}
?>
