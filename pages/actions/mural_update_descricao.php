<?php
session_start();
ob_start();

require __DIR__."/../../vendor/autoload.php";


use App\Entity\Recado;
 
 
$dados = json_decode(file_get_contents('php://input'), true);

 
$obRecado = new Recado($_SESSION['id_user'],$dados['novaDescricao']);

if($obRecado->setDados($dados['id_recado'])
){

    $response = [
        'status'=>true
    ];

}else{
    $response = [
        'status'=>false
    ];
}

$responseJson = json_encode($response);

echo($responseJson);


