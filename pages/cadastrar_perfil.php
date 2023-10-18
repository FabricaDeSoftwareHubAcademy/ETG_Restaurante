<?php
require __DIR__."/../vendor/autoload.php";
require("../includes/header/header.php");

use App\Entity\Perfil;



if (isset($_POST['botao_salvar'], $_POST['nome_cargo'])){

    $objPerfil = new Perfil($_POST['nome'], 
    (isset($_POST['gerenciar_salas']) ? 1 : 0),
    (isset($_POST['gerenciar_perguntas']) ? 1 : 0),
    (isset($_POST['gerenciar_checklists']) ? 1 : 0),
    (isset($_POST['gerenciar_salas']) ? 1 : 0),
    (isset($_POST['gerenciar_notificacoes']) ? 1 : 0),
    (isset($_POST['realizar_checklist']) ? 1 : 0),
    (isset($_POST['realizar_nao_conformidade']) ? 1 : 0),
    (isset($_POST['mais_usados_administrador']) ? 1 : 0)
); 

/*Chamando o metodo cadastrar da classe Perfil, essa funcao primeiramente vai verificar se ja existe
algum perfil com este nome, se sim vai retornar false, senao true, logo, vai cadastrar no banco.*/ 
if ($objPerfil -> cadastrar())
{
    
    header("Location: listar_perfis.php");
    //recarregando para a mesma pagina depois de cadastrar, futuramente: um popup ou modal
    
} 
}

include_once("../includes/menu.php"); 
require("../includes/main/main_cadastrar_perfil.php");
require("../includes/footer/footer.php");
?>