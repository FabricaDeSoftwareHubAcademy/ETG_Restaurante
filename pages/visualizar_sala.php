<?php
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
$titulo_page = 'Visualizar Sala';
require("../includes/header/header.php");



use App\Entity\Sala;

if(isset($_GET['id_sala'])){
    
    $id_sala = $_GET['id_sala'];

    $dados = Sala::getDadosById($id_sala);
    //var_dump($dados);exit;
    
}
// print_r($dados);
// echo($dados['funcionamento']);
$funcionamento = json_decode($dados[0]['horarios'], true);
// print_r($funcionamento);

$segunda = $funcionamento['segunda'] == 'sim' ? 'Segunda' : '';
$terca = $funcionamento['terca'] == 'sim' ? 'Terça' : '';
$quarta = $funcionamento['quarta'] == 'sim' ? 'Quarta' : '';
$quinta = $funcionamento['quinta'] == 'sim' ? 'Quinta' : '';
$sexta = $funcionamento['sexta'] == 'sim' ? 'Sexta' : '';
$sabado = $funcionamento['sabado'] == 'sim' ? 'Sábado' : '';
$matutino = $funcionamento['turnos']['matutino'] == 'sim' ? 'Matutino' : ' ';
$vespertino = $funcionamento['turnos']['vespertino'] == 'sim' ? 'Vespertino' : ' ';
$noturno = $funcionamento['turnos']['noturno'] == 'sim' ? 'Noturno' : ' ';

require("../includes/main/main_visualizar_sala.php");
require("../includes/footer/footer.php");
?>