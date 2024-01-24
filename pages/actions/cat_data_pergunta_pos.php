<?php


// PRECISA DAR UM UPDATE NA TABELA ADICIONANDO A DATA DE FECHAMENTO 

session_start();
require __DIR__."/../../vendor/autoload.php";
use App\Entity\ResponderChecklist;
use App\Entity\Checklist;

$dados = json_decode(file_get_contents('php://input'), true);

$id_sala = $_GET['id_sala'];

// select para pegar o ultimo registro  
$id_last_insert = Checklist::getLastCheck($id_sala)['id'] ;

$response=ResponderChecklist::cadastrar_pos($dados, $id_last_insert);
echo(json_encode($response));exit;





