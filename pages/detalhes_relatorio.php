<?php
session_start();
require __DIR__."/../vendor/autoload.php";
use App\Entity\Checklist;


if(isset($_GET['id_usuario'])&& $_GET['id_checklist']){

$id_usuario=$_GET['id_usuario'];
$id_checklist=$_GET['$id_checklist'];
echo("entrou no if !");

$objCheck = new Checklist();

$busca = $objCheck->getData();

echo '<pre>';
echo print_r($busca);
echo '</pre>';


}










include_once("../includes/menu.php"); 
require("../includes/main/main_detalhes_relatorio.php");
require("../includes/footer/footer.php");















?>