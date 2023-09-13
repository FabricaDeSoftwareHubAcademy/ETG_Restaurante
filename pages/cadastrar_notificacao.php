<?php
require __DIR__."/../vendor/autoload.php";
require("../includes/header/header.php");
include_once("../includes/menu.php"); 
require("../includes/main/main_cadastrar_notificacao.php");
//REGRAS DE NEGOCIO ABAIXO

$obj_usuario = new app\Entity\Usuario;
$obj_notificacao = new app\Entity\Notificacao;

if (isset($_POST['btn_submit']))
{
    $obj_notificacao::cadastrar($_POST[], $_POST[], $_POST[], $_POST[]);
}




//FIM DAS REGRAS DE NEGOCIO
require("../includes/footer/footer.php");
?>