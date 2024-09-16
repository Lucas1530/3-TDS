<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

class criaClasses
{
    static function criar($conn, $banco, $usuario, $senha)
    {
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

    private static function criarModel($conn, $tabela, $nomeTabela)
    {
        $conteudo = "<?php\nclass $nomeTabela {\n";
        $queryAttr = $conn->query("SHOW COLUMNS FROM $tabela");
        $atributos = $queryAttr->fetchAll(PDO::FETCH_OBJ);

        foreach ($atributos as $atributo) {
            $conteudo .= "private \${$atributo->Field};\n";
        }

        foreach ($atributos as $atributo) {
            $campo = ucfirst($atributo->Field);
            $conteudo .= "function get$campo() {\n\treturn \$this->{$atributo->Field};\n}\n";
            $conteudo .= "function set$campo(\${$atributo->Field}) {\n\t\$this->{$atributo->Field} = \${$atributo->Field};\n}\n";
        }
        $conteudo .= "?>";
        file_put_contents("sistema/model/{$nomeTabela}.php", $conteudo);
    }

    private static function criarDAO($nomeTabela)
    {
        $conteudo = "<?php\nclass {$nomeTabela}DAO {\n";
        $conteudo .= "\tpublic function __construct() {}\n";
        $conteudo .= "\tfunction inserir() {}\n";
        $conteudo .= "\tfunction excluir() {}\n";
        $conteudo .= "\tfunction buscar() {}\n";
        $conteudo .= "\tfunction alterar() {}\n";
        $conteudo .= "}\n?>";
        file_put_contents("sistema/dao/{$nomeTabela}DAO.php", $conteudo);
    }

    private static function criarConexao($banco, $usuario, $senha)
    {
        $conteudo = "<?php\nclass Conexao {\n";
        $conteudo .= "\tpublic static function conectar() {\n";
        $conteudo .= "\t\ttry {\n";
        $conteudo .= "\t\t\t\$conn = new PDO('mysql:host=localhost;dbname=$banco', '$usuario', '$senha');\n";
        $conteudo .= "\t\t} catch (PDOException \$e) {\n";
        $conteudo .= "\t\t\techo \$e->getMessage();\n";
        $conteudo .= "\t\t}\n";
        $conteudo .= "\t\treturn \$conn;\n";
        $conteudo .= "\t}\n";
        $conteudo .= "}\n?>";
        file_put_contents("sistema/dao/conexao.php", $conteudo);
    }

    private static function criarControl($nomeTabela)
    {
        $conteudo = "<?php\ninclude '../dao/{$nomeTabela}DAO.php';\n";
        $conteudo .= "class {$nomeTabela}Control {\n}\n?>";
        file_put_contents("sistema/control/{$nomeTabela}Control.php", $conteudo);
    }

    private static function criarView($conn, $tabela, $nomeTabela)
    {
        $queryAttr = $conn->query("SHOW COLUMNS FROM $tabela");
        $atributos = $queryAttr->fetchAll(PDO::FETCH_OBJ);

        $conteudo = "<!DOCTYPE html>\n<html lang='pt'>\n<head>\n\t<meta charset='UTF-8'>\n\t<title>{$nomeTabela} Formulário</title>\n</head>\n<body>\n";
        $conteudo .= "<form method='post' action='../control/{$nomeTabela}Control.php'>\n";
        foreach ($atributos as $atributo) {
            $campo = ucfirst($atributo->Field);
            $conteudo .= "<label for='{$atributo->Field}'>{$campo}:</label>\n";
            $conteudo .= "<input type='text' name='{$atributo->Field}' id='{$atributo->Field}'><br>\n";
        }
        $conteudo .= "<input type='submit' value='Enviar'>\n</form>\n</body>\n</html>";

        file_put_contents("sistema/view/{$nomeTabela}.php", $conteudo);
    }
}
?>
