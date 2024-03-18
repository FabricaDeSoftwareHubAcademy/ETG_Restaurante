<?php
session_start();
//CADASTRAR NAO CONFORMIDADE

require __DIR__."/../../vendor/autoload.php";
use App\Entity\Mailer;
use App\Entity\Usuario;
use App\Entity\Sala;

$obMailer = new Mailer();
$dadosDocente = Usuario::getDadosById($_GET['id_docente'])[0];
$dadosLogistica = Usuario::getDadosById($_SESSION['id_user'])[0];
$dadosSala = Sala::getDadosById($_GET['id_sala'])[0];

$dadosNC = json_decode(file_get_contents('php://input'), true); 


if (true) {

    $hratual = date('H:i:s');
    foreach($dadosNC as $nConformidade){


        $contentEmail = "Nova não conformidade registrada na sala ".$dadosSala['nome'] ." às ". $hratual . " por " . $dadosLogistica['nome'] . " (".$dadosLogistica['email'].").";
        $obMailer -> sendEmailNConformidade('arthur2006.teixeira@gmail.com',$contentEmail, $dadosLogistica, $dadosDocente,$nConformidade['imagesToPHP'], $nConformidade['textAreaContent']);
   

    }

}

echo(json_encode($dadosNC));