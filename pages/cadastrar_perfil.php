<?php
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
require("../includes/header/header.php");

use App\Entity\Perfil;


//Se o botao_salvar e o nome do cargo estiverem setados
if (isset($_POST['botao_salvar'], $_POST['nome_cargo'])){
    /*Chamando o metodo setDados que vai alterar os dados do objeto em questao
    Lembrando que o unico obrigatorio e o nome do cargo*/
    $objPerfil = new Perfil($_POST['nome_cargo'], 
    (isset($_POST['cadastrar_sala']) ? 1 : 0),
    (isset($_POST['editar_sala']) ? 1 : 0),
    (isset($_POST['remover_sala']) ? 1 : 0),
    (isset($_POST['validar_checklist']) ? 1 : 0),
    (isset($_POST['inserir_item_checklist']) ? 1 : 0),
    (isset($_POST['remover_item_checklist']) ? 1 : 0),
    (isset($_POST['desbloquear_checklist']) ? 1 : 0),
    (isset($_POST['descricao_nao_conformidade']) ? 1 : 0),
    (isset($_POST['enviar_notificacao']) ? 1 : 0)
); 

/*Chamando o metodo cadastrar da classe Perfil, essa funcao primeiramente vai verificar se ja existe
algum perfil com este nome, se sim vai retornar false, senao true, logo, vai cadastrar no banco.*/ 
if ($objPerfil -> cadastrar()){
    
    header("Location: listar_perfis.php");
    //recarregando para a mesma pagina depois de cadastrar, futuramente: um popup ou modal
    
} 
}

require("../includes/main/main_cadastrar_perfil.php");
require("../includes/footer/footer.php");
?>