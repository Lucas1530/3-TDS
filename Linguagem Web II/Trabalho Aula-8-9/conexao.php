
<?php

class Conexao
{
    private static $conn = null;

    public static function getConexao()
    {
        if (self::$conn == null) {
            // Configurações do banco de dados
            $opcoes = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );

            $endereco = "mysql:host=localhost;dbname=jogos_db"; // Alterado para jogos_db
            $usuario = "root";
            $senha = "bancodedados";

            try {
                self::$conn = new PDO($endereco, $usuario, $senha, $opcoes);
            } catch (PDOException $e) {
                echo "Erro ao conectar no banco de dados!<br>";
                echo $e->getMessage();
            }
        }

        return self::$conn;
    }
}
?>
