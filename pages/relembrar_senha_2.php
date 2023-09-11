<?php
session_start();
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
require("../includes/header/header.php");
require("../includes/main/main_relembrar_senha_2.php");


if (isset($_POST['btn_submit']) && isset($_SESSION['cod_redef_senha']))
{
    if ($_POST['email'] == $_SESSION['cod_redef_senha'])
    {
        unset($_SESSION['cod_redef_senha']);
        header("Location: tela_esqueceu_senha3.php");
    }
    else
    {
        die('ta errado!');
    }
}

if (isset($_POST['btn_resend']))
{
    App\Entity\Mailer::sendEmail($_SESSION['email_to_redef_secret']);
}
require("../includes/footer/footer.php");
?>