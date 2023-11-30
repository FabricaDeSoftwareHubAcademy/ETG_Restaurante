<?php
session_start();
require __DIR__."/../../vendor/autoload.php";
use App\Entity\ResponderChecklist;

$id_sala = $_GET['id_sala'];

$dados = json_decode(file_get_contents('php://input'), true);
// echo(json_encode($dados));exit;



ResponderChecklist::cadastrar($dados, $id_sala);
echo(json_encode($dados));exit;





