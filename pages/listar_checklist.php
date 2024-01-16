<?php

use App\Entity\Sala;

session_start();
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php");
// $titulo_page = 'Validar checklist';
$objSala = new Sala();





require("../includes/main/main_listar_checklist.php");
require("../includes/footer/footer.php");
?>