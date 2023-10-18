<?php
require __DIR__."/../vendor/autoload.php";
require("../includes/header/header.php");

use app\Entity\Notificacao;


include_once("../includes/menu.php"); 
require("../includes/main/main_cadastrar_notificacao.php");
//REGRAS DE NEGOCIO ABAIXO


$id_remetente = '1'; //VAI PEGAR DA SESSION O ID DO USUARIO
$email_destinatario = $_POST['email_destinatario']; //email 
$texto = $_POST['descricao'];

Notificacao::getDados()


// Notificacao::cadastrar($id_remetente);


//FIM DAS REGRAS DE NEGOCIO
// require("../includes/footer/footer.php");
?>