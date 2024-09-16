<?php
include "sistema/dao/conexao.php";

class CriaClasses {
    public static function criar($conn, $banco, $usuario, $senha) {
        $tBanco = "Tables_in_" . $banco;
        $query = $conn->query("SHOW TABLES");
        $tabelas = $query->fetchAll(PDO::FETCH_OBJ);

        umask(000);
        if (!file_exists("sistema")) {
            mkdir("sistema");
        }
        $folders = ['model', 'view', 'control', 'dao'];
        foreach ($folders as $folder) {
            if (!file_exists("sistema/$folder")) {
                mkdir("sistema/$folder");
            }
        }
        file_put_contents("sistema/index.php", "");

        foreach ($tabelas as $tabela) {
            $nomeTabela = ucfirst($tabela->$tBanco);
            self::criarModel($conn, $tabela->$tBanco, $nomeTabela);
            self::criarDAO($nomeTabela);
            self::criarControl($nomeTabela);
            self::criarView($conn, $tabela->$tBanco, $nomeTabela);
        }
        self::criarConexao($banco, $usuario, $senha);

        return 1;
    }

    private static function criarModel($conn, $tabela, $nomeTabela) {
        // Implementation for creating model
    }

    private static function criarDAO($nomeTabela) {
        // Implementation for creating DAO
    }

    private static function criarConexao($banco, $usuario, $senha) {
        // Implementation for creating connection file
    }

    private static function criarControl($nomeTabela) {
        // Implementation for creating control file
    }

    private static function criarView($conn, $tabela, $nomeTabela) {
        // Implementation for creating view file
    }
}
?>
