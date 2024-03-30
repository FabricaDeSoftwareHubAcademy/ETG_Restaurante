<?php
session_start();
$titulo_page = "Relatório Usuário";
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php");
if(!$ifreaac){
    header("Location: ./listar_recados.php");
}
use App\Entity\Relatorio;
use App\Entity\Usuario;
use App\Entity\Sala;



$relatorio = new Relatorio();
$usuario = new Usuario();
$sala = new Sala();

$dadosRelatorio = $relatorio -> getAll();
$dadosUsuario = $relatorio::getUsers();
$dadosSala = $sala::getDados();

 
require("../includes/main/main_relatorio_usuario.php");