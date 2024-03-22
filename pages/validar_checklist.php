<?php
require __DIR__."/../vendor/autoload.php";
session_start();
use App\Entity\ValidarChecklist;
$dados_sala = isset($dados_sala) ? $dados_sala : null;
// var_dump($dados_sala);exit;
include_once("../includes/menu.php");
$titulo_page = 'Validar checklist';
$idResponderCheck = $_GET["id_realizacao"];
$objValidarChecklist = new ValidarChecklist();  
$idSala = $objValidarChecklist -> getIdSala(idResponderCheck: $idResponderCheck);
$perguntas = $objValidarChecklist -> getPerguntas(idSala: $idSala);
// $perguntas["id_realizacao"] = $idResponderCheck;
// var_dump($perguntas);exit;
$id_sala = 0;
foreach ($perguntas as &$row) {
    // var_dump($row);exit;
    $id_sala = $row["id_sala"]; 
    $NaoConformidade = $objValidarChecklist -> hasNaoConf(idPergunta: $row["id_pergunta"], idRealiza: $idResponderCheck);
    $row["id_realizacao"] = $idResponderCheck;
    if ($NaoConformidade[0] == true) {
        $dados = $NaoConformidade[1];
        // var_dump($dados);exit;
        $row["imagesToPHP"] = [
            0 => $dados["img1"],
            1 => $dados["img2"],
            2 => $dados["img3"]
        ];
        $row["descricao_nao_confirmidade_docente"] = $dados["descricao_NC"];
        $row["id_nao_conformidade"] = $dados["id"];
        $row["NaoConformidade"] = true;
        $row["responsavel"] = "docente";

    }


}
// var_dump($perguntas);exit;
$perguntasJson = json_encode($perguntas);
//não tenho tempo pra estruturar então vou só mandar por aqui mesmo
$id_sala = json_decode($id_sala);

require("../includes/modais/nao_conformidade_logistica.php");
require("../includes/modais/mostrar_nao_conformidade.php");
require("../includes/main/main_validar_checklist.php");
require("../includes/footer/footer.php");
?>