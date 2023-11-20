<?php
require __DIR__."/../../vendor/autoload.php";

use \App\Entity\Perfil;
$obj_perfil = new Perfil();


if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else
{
    header("Location: ../pages/listar_perfis.php");
}


$action_excluir = $obj_perfil -> deleteById($id) ? true : false;

$response = [
    'status'=>true  
];

// echo(json_encode($response));
// header("Location: ../listar_perfis.php");
