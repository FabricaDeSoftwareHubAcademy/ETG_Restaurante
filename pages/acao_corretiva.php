<?php
session_start();
require __DIR__."/../vendor/autoload.php";


include_once("../includes/menu.php");

 
require("../includes/modais/nao_conformidade_logistica.php");
require("../includes/main/main_acao_corretiva.php");
require("../includes/footer/footer.php");
?>