<?php
require "../vendor/autoload.php";
require("../includes/header/header.php");

use App\Entity\Notificacao;
use App\Entity\Usuario;
//REGRAS DE NEGOCIO ABAIXO

if (isset($_POST['btn_submit']))
{
    $id_remetente = '1'; //VAI PEGAR DA SESSION O ID DO USUARIO
    $email_destinatario = $_POST['email_destinatario']; //email 
    $texto = $_POST['descricao'];
    
    $usuarios = Usuario::getDadosByEmail($email_destinatario);
    if($usuarios)
    {
        $id_destinatario = $usuarios[0]['id'];
        Notificacao::cadastrar($id_remetente ,$id_destinatario, $texto);
        header("Location: listar_salas.php");
    }
    else
    {
        die('ESTE EMAIL NAO EXISTE'); //pop up
    }
    
} 


include_once("../includes/menu.php"); 
require("../includes/main/main_cadastrar_notificacao.php");
require("../includes/footer/footer.php");
?>