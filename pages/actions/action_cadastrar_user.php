<?php

require __DIR__."/../../vendor/autoload.php";
use App\Entity\Usuario;
$objUsuario = new Usuario();

$nome = $_POST['nome'];
$email = $_POST['email'];
$num_matricula = $_POST['num_matricula'];
$senha = $_POST['senha'];
$id_perfil = $_POST['id_perfil'];

$result = $objUsuario->cadastrar($nome, $email, $num_matricula, $senha, $id_perfil);

if($result){
    $arr = ["status" => "OK"];
}else{
    $arr = ["status" => "ERROR"];
}


echo json_encode($arr);


