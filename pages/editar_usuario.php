<?php
session_start();

include_once("../includes/menu.php");

echo "<script src='../assets/js/modais.js'> </script>";

require __DIR__."/../vendor/autoload.php";

$titulo_page = 'Minha Conta';

//REGRAS DE NEGOCIO ABAIXO 
 

use App\Entity\Usuario;
 
$objUsuario = new Usuario();
$erro = false;

$area_edit = '';

$id_modificar = isset($_GET['id_user']) ? $_GET['id_user'] : $_SESSION['id_user'];

$dados_editar = $objUsuario->getDadosById($id_modificar)[0];  
$foto = $dados_editar['foto'];


if(!isset($_GET['id_user'])){


    $area_edit = '<section class="editar_senha">
    <section class="titulo_alterar_senha">
        <h1>Alterar Senha</h1>
    </section>

    <div class="centralizar-back"> 
        <section class="centralizar_input_alterar_senha">

            
           
            <div class="input_senha_group field">
                <input name="senhaantiga" type="password" class="input_senha_field" placeholder="Name">
                <label for="name" class="input_senha_label">Senha antiga</label> <!--Alterar para o nome do input-->
            </div>

            <div class="input_senha_group field2">
                <input name="novasenha" type="password" class="input_senha_field" placeholder="Name">
                <label for="name" class="input_senha_label">Criar nova senha</label> <!--Alterar para o nome do input-->
            </div>

            <div class="input_senha_group field3">
                <input name="confirmarnovasenha" type="password" class="input_senha_field" placeholder="Name" >
                <label for="name" class="input_senha_label">Confirmar nova senha</label> <!--Alterar para o nome do input-->
            </div>
            </section> 
        </div> 

    </section>';



}else{

    $area_edit = '
    <section class="editar_senha">
    <section class="titulo_alterar_senha">
        <h1>E-Mail</h1>
    </section>

    <div class="centralizar-back"> 
        <section class="centralizar_input_alterar_senha">

            <div class="input_senha_group field">
                <input name="email" type="text" class="input_senha_field" placeholder="Name" value="'.$dados_editar['email'].'">
                <label for="name" class="input_senha_label">E-Mail</label> <!--Alterar para o nome do input-->
            </div>

        </section> 
    </div> 


    <section class="titulo_alterar_senha">
        <h1>Matrícula</h1>
    </section>

    <div class="centralizar-back"> 
        <section class="centralizar_input_alterar_senha">

            <div class="input_senha_group field">
                <input name="matricula" type="text" class="input_senha_field" placeholder="Name" value="'.$dados_editar['matricula'].'">
                <label for="name" class="input_senha_label">Número de Matrícula</label> <!--Alterar para o nome do input-->
            </div>

        </section> 
    </div> 

</section>
    
    
    ';

}


if(isset($_FILES['foto'])){

    if(strlen($_FILES['foto']['name']) > 0 ){ 
      
         
        $name_img = $_FILES['foto']['name'];
        $new_name  = uniqid(). '-' . substr($name_img, 0, 20);
        $path = '../assets/imgs/users/';
        move_uploaded_file($_FILES['foto']['tmp_name'], $path.$new_name);
        
        // unlink($path . $dados_editar['foto']);
    
        $objUsuario->setImage($dados_editar['email'],$new_name);
        // header("Location: Refresh: 0");

        $_SESSION["msg_edit"]='Salvo com sucesso!';

    }
}
if(isset($_POST['btn_submit'])){
     
    // setar nome 
    
     
    if(isset($_POST['nome'])){


        $objUsuario -> setName($_POST['nome'],$dados_editar['email']);  
        // header("Location: {$_SERVER['PHP_SELF']}");
        $_SESSION["msg_edit"]='Salvo com sucesso!';


    }else{

        $objUsuario -> setName($dados_editar['nome'],$dados_editar['email']); 
        $_SESSION["msg_edit"]='Salvo com sucesso!';

    }
    
    if (strlen($_POST['senhaantiga']) > 0 and strlen($_POST['novasenha']) > 0 and strlen($_POST['confirmarnovasenha']) > 0 )
    {
         

        if ($_POST['novasenha'] == $_POST['confirmarnovasenha']){
            $objUsuario -> setPasswordByEmail($dados_editar['email'],$_POST['novasenha']); 
            $_SESSION["msg_edit"]='Salvo com sucesso!';
          
            
        }else{
            
            $erro = true;

        } 
    } 
    else
    {
        $erro = true; 
    } 

    if(isset($_POST['email'])){
 
        if(strlen($_POST['email']) > 0 and strlen($_POST['matricula']) > 0){
    
    
            try{
    
                $dadosByEmail     = Usuario::getDadosByEmail($_POST['email']);
                $dadosByMatricula = Usuario::getDadosByMatricula($_POST['matricula']);
    
     
                if(empty($dadosByEmail) || empty($dadosByMatricula)){
    
                    if(empty($dadosByEmail)){
                        
                        Usuario::setEmail($_GET['id_user'],$_POST['email']);
                        $_SESSION["msg_edit"]='Salvo com sucesso!';
        
                    }else{
                        // retornar que E-Mail ja esta sendo utilizado por outro usuario
                    }
                    
                    if(empty($dadosByMatricula)){ 
    
                        Usuario::setMatricula($_GET['id_user'],$_POST['matricula']);
    
                        $_SESSION["msg_edit"]='Salvo com sucesso!';
                    
                    }else{
                        // retornar que matricula ja esta sendo utilizado por outro usuario
                    }
    
                }
                 
            }catch(PDOException $e){
                echo($e->getMessage());
            }
    
        }
    }

    
    
    
}


require("../includes/header/header.php"); 
include_once("../includes/menu.php");
require("../includes/main/main_editar_usuario.php");

if(isset($_SESSION['msg_edit'])){
    echo"<script>modalStatus('Salvo com sucesso!','success',()=>{
        location.href='editar_usuario.php'
    })</script>";
    
    unset($_SESSION['msg_edit']);
}

//FIM DAS REGRAS DE NEGOCIO
require("../includes/footer/footer.php");
?>


<!-- echo"<script>modalStatus('Salvo com sucesso!','success',()=>{
            location.reload()
        })</script>"; -->