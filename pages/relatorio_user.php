<?php
session_start();
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php");
if(!$ifreaac){
    header("Location: ../listar_recados.php");
}
use App\Entity\Relatorio;
use App\Entity\Usuario;
use App\Entity\Sala;



$relatorio = new Relatorio();
$usuario = new Usuario();
$sala = new Sala();

$php_data = [];
$dadosRelatorio = $relatorio -> getAll();
$dadosUsuario = $relatorio::getUsers();
$dadosSala = $sala::getDados();
$php_data["dadosRelatorio"] = $dadosRelatorio;
$php_data["dadosUsuario"] = $dadosUsuario;
$php_data["dadosSala"] = $dadosSala;
$php_data = json_encode($php_data);
// foreach($dadosSala as $row) {
//     var_dump($row["nome"]);
//     echo "<br>";
//     echo "<br>";
//     echo "<br>";
//     echo "<br>";    

// }exit;
// var_dump($dados);exit;
require("../includes/main/main_relatorio_usuario.php");