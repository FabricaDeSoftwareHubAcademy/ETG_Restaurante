<?php
require __DIR__."/../../vendor/autoload.php";

use \App\Entity\Recado;


if(isset($_GET['id_recado'])){
    $id_recado = $_GET['id_recado'];
}else{
    header("Location: ../mural.php");
}

$action_excluir = Recado::excluir($id_recado) ? true : false;

if($action_excluir){

    $response = [
        'status'=>true  
    ];
}else{

    $response = [
        'status'=>false
    ];
}

echo(json_encode($response));