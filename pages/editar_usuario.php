<?php
session_start();
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
require("../includes/header/header.php");

//REGRAS DE NEGOCIO ABAIXO
print($_SESSION['id_user']);
 

use App\Entity\Usuario;
 
$objUsuario = new Usuario();
$logado = false;
$erro = false;

$dados = $objUsuario->getDadosById($_SESSION['id_user']);
print_r($dados);



if (isset($_POST['btn_submit'])){
   
    
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
require("../includes/main/main_editar_usuario.php");
//FIM DAS REGRAS DE NEGOCIO
require("../includes/footer/footer.php");
?>