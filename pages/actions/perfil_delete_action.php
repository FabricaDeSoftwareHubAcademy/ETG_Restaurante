<?php
// $id_perfil = json_decode(file_get_contents('php://input'), true);
$id_perfil = $_GET['id_perfil'];
echo(json_encode($id_perfil));exit;

require __DIR__."/../../vendor/autoload.php";

use \App\Entity\Perfil;
$obj_perfil = new Perfil();


if(isset($_GET['id'])){
}
else
{
    header("Location: ../pages/listar_perfis.php");
}


$action_excluir = $obj_perfil -> deleteById($id) ? true : false;

// var_dump($obj_perfil);
header("Location: ../listar_perfis.php");
