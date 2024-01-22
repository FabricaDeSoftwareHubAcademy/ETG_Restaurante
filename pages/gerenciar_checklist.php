<?php
session_start();
require __DIR__."/../vendor/autoload.php";
$titulo_page = 'Editar Sala';
include_once("../includes/menu.php"); 





require("../includes/header/header.php");
require("../includes/main/main_gerenciar_checklist.php");
?>