<?php
session_start();
require __DIR__."/../vendor/autoload.php";
$titulo_page = 'Cadastrar Perfil';
require("../includes/header/header.php");
include_once("../includes/menu.php"); 
require("../includes/main/main_cadastrar_perfil.php");
require("../includes/footer/footer.php");
?>

