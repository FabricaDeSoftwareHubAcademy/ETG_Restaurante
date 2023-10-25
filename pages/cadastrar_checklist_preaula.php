<?php 
session_start();    
require __DIR__."/../vendor/autoload.php";
require("../includes/header/header.php");
include_once("../includes/menu.php");
use App\Entity\Checklist;

$obj_checklist = new Checklist();
//REGRAS DE NEGOCIO ABAIXO
$id_sala = $_GET["id_sala"]; //do metodo GET	
$id_usuario = $_SESSION['id_user']; //do metodo GET
$data_fechamento = "1970-01-01 00:00:01";

if (isset($_POST["btn_submit"]))
{
    $obj_checklist -> cadastrar(
        [
        "id_usuario" => $id_usuario,
        "id_sala" => $id_sala,
        "data_fechamento" => $data_fechamento
         ]
);
}

//FIM DAS REGRAS DE NEGOCIO
require("../includes/main/main_cadastrar_checklist_preaula.php");
require("../includes/footer/footer.php");
?>