<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Conexao {
    public static function conectar() {
        $host = 'localhost'; 
        $dbname = 'framework'; 
        $user = 'root'; 
        $password = ''; 

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit; // Stop script execution on connection failure
        }
    }
}
?>
