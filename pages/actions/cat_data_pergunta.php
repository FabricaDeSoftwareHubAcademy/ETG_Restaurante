<?php
session_start();
require __DIR__."/../../vendor/autoload.php";
use App\Entity\ResponderChecklist;
use App\Entity\Sala;

$id_sala = $_GET['id_sala'];

$dados = json_decode(file_get_contents('php://input'), true);
// echo(json_encode($dados));exit;

$obj_sala = new Sala(); 
$dados_sala = $obj_sala::getDadosById($id_sala);
$id_check = $dados_sala[0]['id_check']; 
 

$response=ResponderChecklist::cadastrar($dados, $id_sala, $id_check);
 