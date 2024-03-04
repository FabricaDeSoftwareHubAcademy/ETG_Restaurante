<?php
require __DIR__."/../vendor/autoload.php";
session_start();
// $dados_sala = isset($dados_sala) ? $dados_sala : null;

include_once("../includes/menu.php");
// $titulo_page = 'Validar checklist';
// $idResponderCheck = $_GET["id_realizacao"];
// $objValidarChecklist = new ValidarChecklist();  
// $idSala = $objValidarChecklist -> getIdSala(idResponderCheck: $idResponderCheck);
// $perguntas = $objValidarChecklist -> getPerguntas(idSala: $idSala);
// var_dump($perguntas);exit;

// foreach ($perguntas as &$row) {
//     $NaoConformidade = $objValidarChecklist -> hasNaoConf(idPergunta: $row["id_pergunta"], idRealiza: $idResponderCheck);
//     if ($NaoConformidade != false) {
        
//         // var_dump($NaoConformidade);exit;
//         $row["textAreaContent"] = $NaoConformidade[1]["descricao_NC"];
//         $row["imagesToPHP"] = [
//             0 => $NaoConformidade[1]["img1"],
//             1 => $NaoConformidade[1]["img2"],
//             2 => $NaoConformidade[1]["img3"]
//         ];
//         $row["id_nao_conformidade"] = $NaoConformidade[1]["id"];
//         $row["NaoConformidade"] = true;
//         $row["responsavel"] = "docente";
//     }


// }
// var_dump($perguntas);exit;
 
// $perguntasJson = json_encode($perguntas);

require("../includes/modais/nao_conformidade_logistica.php");
require("../includes/main/main_acao_corretiva.php");
require("../includes/footer/footer.php");
?>