<?php 
session_start();




require __DIR__."/../vendor/autoload.php";

$titulo_page = 'Editar Usuario';

//REGRAS DE NEGOCIO ABAIXO 
 

use App\Entity\Usuario;
 
$objUsuario = new Usuario();
$erro = false;

// validar se $_SESSION['id_user'] esta setado(leu logo assumiu a responsabilidade) 

$dados_editar = $objUsuario->getDadosById($_SESSION['id_user'])[0];  
$foto = $dados_editar['foto'];

if(isset($_FILES['foto'])){ 
    
    
    
    $name_img = $_FILES['foto']['name'];
    $new_name  = uniqid(). '-' . substr($name_img, 0, 20);
    $path = '../assets/imgs/users/';
    move_uploaded_file($_FILES['foto']['tmp_name'], $path.$new_name);
    
    unlink($path . $dados_editar['foto']);

    $objUsuario->setImage($dados_editar['email'],$new_name);
  
}
if(isset($_POST['btn_submit'])){
     
    // setar nome 
    
     
    if(isset($_POST['nome'])){


        $objUsuario -> setName($_POST['nome'],$dados_editar['email']); 

    }else{

        $objUsuario -> setName($dados_editar['nome'],$dados_editar['email']); 

    }
    
     
    // if (    isset($_POST['senhaantiga'],$_POST['novasenha'],$_POST['confirmarnovasenha']))
    if (strlen($_POST['senhaantiga']) > 0 and strlen($_POST['novasenha']) > 0 and strlen($_POST['confirmarnovasenha']) > 0 )
    {
         
        
        if ($_POST['novasenha'] == $_POST['confirmarnovasenha']){
            $objUsuario -> setPasswordByEmail($dados_editar['email'],$_POST['novasenha']); 
          
            header('Refresh: 0');
        }else{
            
            $erro = true;

        } 
    } 
    else
    {
        $erro = true; 
    } 

    
    header('Refresh: 0');
    
}


require("../includes/header/header.php"); 
include_once("../includes/menu.php");
require("../includes/main/main_editar_usuario.php");
//FIM DAS REGRAS DE NEGOCIO
require("../includes/footer/footer.php");
?>