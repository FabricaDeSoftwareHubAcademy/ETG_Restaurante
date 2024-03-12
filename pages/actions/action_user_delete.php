<?php
require __DIR__."/../../vendor/autoload.php";
use App\Entity\Usuario;

$response = ["status" => false];

$id_user = $_GET["id_user"];

$pode_deletar = Usuario::canDelete($id_user);
if ($pode_deletar) {
    Usuario::deleteById($id_user);
    $response = ["status" => true];
}

echo json_encode($response["status"]);