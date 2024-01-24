<?php

require __DIR__."/../../vendor/autoload.php";
use App\Entity\Usuario;

$obUser = new Usuario();
$obUser -> deleteById($_GET['id_user']);


$response = true;
echo(json_encode($response));


?>