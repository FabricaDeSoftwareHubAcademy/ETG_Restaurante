<?php
require 'conexao.php';
$conn = new Conexao();
if($_POST){
    $nome = preg_replace('/[^[:alpha:]_]/', '',$_POST['nome']);
    $senha = preg_replace('/[^[:alnum:]_]/', '',$_POST['senha']);
    $select = $conn->select($nome, $senha);
    var_dump($select);
}
?>