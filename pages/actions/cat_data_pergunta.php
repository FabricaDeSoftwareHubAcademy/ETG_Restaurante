<?php
session_start();
require __DIR__."/../../vendor/autoload.php";
use App\Entity\NaoConformidade;
use App\Entity\ResponderChecklist;

// echo(json_encode);exit;
$id_sala = $_GET['id_sala'];

$dados = json_decode(file_get_contents('php://input'), true);



ResponderChecklist::cadastrar($dados, $id_sala);
echo(json_encode($dados));exit;

//     //id_realiza
//    //id_prof
//     //id_perg
//     //descricao_NC
//     //img1
//     //img2
//     //img3 



