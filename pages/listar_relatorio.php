<?php
session_start();
$titulo_page = 'Mural Recados'; 
include_once("../includes/menu.php");
 



// require autoload = 0 bugs 
require "../vendor/autoload.php";




    $titulo_page = 'Listar Relatorios';
  
    
    include_once("../includes/header/header.php");
    require("../includes/main/main_listar_relatorio.php");

?>