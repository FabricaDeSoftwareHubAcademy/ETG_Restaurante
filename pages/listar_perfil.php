<?php
require_once("../includes/menu.php");
require_once("../app/entity/Perfil.php");
$objPerfil = new Perfil();
$dados = $objPerfil -> getDados();
var_dump($dados);
?>