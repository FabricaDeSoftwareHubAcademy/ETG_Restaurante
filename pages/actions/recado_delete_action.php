<?php
require __DIR__."/../../vendor/autoload.php";

use \App\Entity\Recado;


if(isset($_GET['id_cadastro_perfil'])){
    $id_perfil = $_GET['id_perfil'];
}else{
    header("Location: ../../pages/gerenc_perfis");
}

$action_excluir = Recado::excluir($id_perfil) ? true : false;

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