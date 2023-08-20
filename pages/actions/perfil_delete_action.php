<?php
require __DIR__."/../../vendor/autoload.php";

use \App\Entity\Perfil;
$obj_perfil = new Perfil();

// $id_perfil=2;

if(isset($_GET['id_cadastro_perfil'])){
    $id_perfil = $_GET['id_cadastro_perfil'];
}else{
    header("Location: ../../pages/gerenc_perfis.php");
}


$action_excluir = $obj_perfil -> deleteById($id_perfil) ? true : false;

$response = [
    'status'=>true  
];

echo(json_encode($response));