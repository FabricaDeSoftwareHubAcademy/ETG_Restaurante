<?php

require __DIR__."/../vendor/autoload.php";

use App\Entity\Usuario;

$objUsuario = new Usuario();
$logado = false;
$erro = false;

include_once('../includes/pop-ups/pop_ups senha_alterada/pop_ups verification_senha_alterada.php');


if (isset($_POST['email'],$_POST['senhaantiga'],$_POST['novasenha'],$_POST['confirmarnovasenha'],$_POST['btn_submit'])){
    if ($objUsuario -> emailValidate($_POST['email']))
    {
        if ($objUsuario -> senhaValidate($_POST['senhaantiga'], $_POST['email']))
        {
            //var_dump($_POST);exit;
            if ($_POST['novasenha'] == $_POST['confirmarnovasenha'])
            {

                $objUsuario -> setDados($_POST['email'] ,$_POST['novasenha']);

                $logado = true;

            }
            else
            {

                $erro = true;

            }

        } 
        else
        {
            $erro = true;


        }
    }
    else
    {

        $erro = true;


    }
  
}

?>
