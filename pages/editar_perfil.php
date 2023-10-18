<?php
require __DIR__."/../vendor/autoload.php";
require("../includes/header/header.php");


use App\Entity\Perfil;

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
}
//Se o botao_salvar e o nome do cargo estiverem setados
if (isset($_POST['botao_salvar'], $_POST['nome_cargo']))
{
    

    /*Chamando o metodo setDados que vai alterar os dados do objeto em questao
    Lembrando que o unico obrigatorio e o nome do cargo*/
    $objeto_perfil = new Perfil($_POST['nome_cargo'], 
    (isset($_POST['cadastrar_sala']) ? 1 : 0),
    (isset($_POST['editar_sala']) ? 1 : 0),
    (isset($_POST['remover_sala']) ? 1 : 0),
    (isset($_POST['validar_checklist']) ? 1 : 0),
    (isset($_POST['inserir_item_checklist']) ? 1 : 0),
    (isset($_POST['remover_item_checklist']) ? 1 : 0),
    (isset($_POST['desbloquear_checklist']) ? 1 : 0),
    (isset($_POST['descricao_nao_conformidade']) ? 1 : 0),
    (isset($_POST['enviar_notificacao']) ? 1 : 0));


    
    /*Chamando o metodo cadastrar da classe Perfil, essa funcao primeiramente vai verificar se ja existe
    algum perfil com este nome, se sim vai retornar false, senao true, logo, vai cadastrar no banco.*/
    
    if ($objeto_perfil -> setDados($id))
    {
        header("Location: listar_perfis.php");
    }
}

$objeto_perfil = new Perfil();
$dados = $objeto_perfil -> getDadosById($id);
$cadastrar_salas = $dados[0] ['realizar_checklist'];
$editar_salas = $dados[0] ['cadastrar_checklist'];
$remover_salas = $dados[0] ['editar_checklist'];
$validar_checklist = $dados[0] ['excluir_checklist'];
$inserir_item_checklist = $dados[0] ['lock_unlock_sala'];
$remover_item_checklist = $dados[0] ['cadastrar_sala'];
$desbloquear_checklist = $dados[0] ['editar_sala'];
$descricao_nao_conformidade = $dados[0] ['remover_sala'];
$enviar_notificacao = $dados[0] ['enviar_notificacao'];
include_once("../includes/menu.php"); 
require("../includes/main/main_editar_perfil.php");
require("../includes/footer/footer.php");
?>