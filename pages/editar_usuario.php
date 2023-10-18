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

if(isset($_POST['btn_submit'])){

    if(isset($_POST['nome'])){
    
    
        if (isset($_POST['senhaantiga'],$_POST['novasenha'],$_POST['confirmarnovasenha'])){
            
           
            if ($objUsuario -> senhaValidate($_POST['senhaantiga'], $dados['email']))
            {
                $nome = $_POST['nome'];
                 
        
                if ($_POST['novasenha'] == $_POST['confirmarnovasenha'])
                {
        
                    $objUsuario -> setDados($nome,$dados['email'] ,$_POST['novasenha']);
                    
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
    }{
    
        if ($objUsuario -> senhaValidate($_POST['senhaantiga'], $dados['email']))
        {
            $nome = $dados['nome'];
             
    
            if ($_POST['novasenha'] == $_POST['confirmarnovasenha'])
            {
    
                $objUsuario -> setDados($nome,$dados['email'] ,$_POST['novasenha']);
                
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

}


require("../includes/main/main_editar_usuario.php");
//FIM DAS REGRAS DE NEGOCIO
require("../includes/footer/footer.php");
?>