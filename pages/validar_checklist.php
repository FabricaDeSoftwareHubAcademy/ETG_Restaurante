<?php
require __DIR__."/../vendor/autoload.php";
use App\Entity\Pergunta;
use App\Entity\Checklist;
use App\Entity\NaoConformidade;
use App\Entity\ValidarChecklist;
session_start();
include_once("../includes/menu.php");
// $titulo_page = 'Validar checklist';
$idResponderCheck = $_GET["id_realizacao"];
$objValidarChecklist = new ValidarChecklist();  
$idSala = $objValidarChecklist -> getIdSala(idResponderCheck: $idResponderCheck);
// die("asd");
$perguntas = $objValidarChecklist -> getPerguntas(idSala: $idSala);

foreach ($perguntas as &$row) {
    $NaoConformidade = $objValidarChecklist -> hasNaoConf(idPergunta: $row["id_pergunta"], idRealiza: $idResponderCheck);
    $row["NaoConformidade"] = $NaoConformidade;
}
// var_dump($perguntas);exit;
 
$perguntasJson = json_encode($perguntas);

require("../includes/modais/nao_conformidade_logistica.php");
require("../includes/main/main_validar_checklist.php");
require("../includes/footer/footer.php");
?>