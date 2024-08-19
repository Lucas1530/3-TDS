<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
 include "conexao.php";
 $query = $conn->query("show tables");
 $tabelas = $query->fetchALL(PDO::FETCH_OBJ);
 $conteudo="";
 //var_dump($tabelas);
 foreach($tabelas as $tabela){
    $conteudo.="class ".ucfirst($tabela->Tables_in_root)."{\n";
    $queryAttr=$conn->query("show columns from ".$tabela->Tables_in_root);
    $atributos= $queryAttr->fetchAll(PDO::FETCH_OBJ);
    foreach($atributos as $atributo){
	   $conteudo.="private $".$atributo->Field.";\n";
	}
	foreach($atributos as $atributo){
	   $conteudo.= "function get".ucfirst($atributo->Field)."(){
	      return $"."this->".$atributo->Field.";}\n";
	   $conteudo.="function set".ucfirst($atributo->Field)."($".$atributo->Field."){
	     $"."this->".$atributo->Field."=".$atributo->Field.";
	 }\n";     
	}
	//echo $conteudo;
    file_put_contents($tabela->Tables_in_root.".php",$conteudo);
    $conteudo="";
 }
  

$server   = "localhost";
$usuario     = "root";
$senha = "bancodedados";
$dbname   = "DB_NAME";


$pdo = new PDO(
    'mysql:host='.$server.';dbname='.$dbname, $usuario, $senha);


$statement = $pdo->query("SUA QUERY STRING");
$clientes


$table  = '<table>';
$table .= '<thead>';
$table .= '<tr>';
$table .= '<td>Selecionar Cliente</td>';
$table .= '<td>idCliente</td>';
$table .= '<td>Nome</td>';
$table .= '<td>Telefone</td>';
$table .= '<td>Endereço</td>';
$table .= '<td>Email</td>';
$table .= '<td>Editar</td>';
$table .= '<td>Excluir</td>';
$table .= '</tr>';
$table .= '</thead>';
$table .= '<tbody>';


foreach($clientes as $cliente){
    $table .= '<tr>';
        $table .= "<td><input type='checkbox' value='{$cliente->id}'></td>";
        $table .= "<td>{$cliente->id}</td>";
        $table .= "<td>{$cliente->name}</td>";
        $table .= "<td>{$cliente->phone}</td>";
        $table .= "<td>{$cliente->address}</td>";
        $table .= "<td>{$cliente->mail}</td>";
        $table .= "<td><a class='bnt btn-info' href='client/edit/{$cliente->id}'>Editar</a></td>";
        $table .= "<td><a class='bnt btn-info' href='client/delete/{$cliente->id}'>Excluir</a></td>";
    $table .= '</tr>';
}


$table .= '</tbody>';
$table .= '</table>';

echo $table;
 ?>
 
