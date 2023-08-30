<?php
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
require("../includes/header/header.php");
require("../includes/main/main_administracao.php");
//REGRAS DE NEGOCIO ABAIXO



//FIM DAS REGRAS DE NEGOCIO
require("../includes/footer/footer.php");

// include_once("../includes/menu.php");
require ("../vendor/autoload.php");
use App\Entity\Perfil;

if(isset($_GET['id'])){
    $id = $_GET['id'];

}
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
    if ($objPerfil -> setDados($id))
    {
        header("Location: gerenc_perfis.php");
    }
}

$dadosPerfil = new Perfil();
$dados = $dadosPerfil->getDadosById($id);
$cadastrar_salas = $dados[0] ['cadastrar_sala'];
$editar_salas = $dados[0] ['editar_sala'];
$remover_salas = $dados[0] ['remover_sala'];
$validar_checklist = $dados[0] ['validar_checklist'];
$inserir_item_checklist = $dados[0] ['inserir_item_checklist'];
$remover_item_checklist = $dados[0] ['remover_item_checklist'];
$desbloquear_checklist = $dados[0] ['desbloquear_checklist'];
$descricao_nao_conformidade = $dados[0] ['descricao_nao_conformidade'];
$enviar_notificacao = $dados[0] ['enviar_notificacao'];

?>