<?php
require __DIR__."/../../vendor/autoload.php";

use \App\Entity\Perfil;


if(isset($_GET['id_perfil'])){
    $id_Perfil = $_GET['id_perfil'];
}else{
    header("Location: ../../pages/gerenc_perfis.php");
}

$action_excluir = Perfil::excluir($id_Perfil) ? true : false;

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