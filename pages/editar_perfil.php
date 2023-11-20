<?php
require __DIR__."/../vendor/autoload.php";
$titulo_page = 'Editar Perfil';
require("../includes/header/header.php");


use App\Entity\Perfil;
$objeto_perfil = new Perfil();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
}
//Se o botao_salvar e o nome do cargo estiverem setados
if (isset($_POST['botao_salvar'], $_POST['nome']))
{
    $objeto_perfil -> setDados($id, ['nome' => $_POST['nome'],
                                    'gerenciar_perguntas' => (isset($_POST['gerenciar_perguntas']) ? 1 : 0),
                                    'gerenciar_salas' => (isset($_POST['gerenciar_salas']) ? 1 : 0),
                                    'realizar_acao_corretiva' => (isset($_POST['realizar_nao_conformidade']) ? 1 : 0),
                                    'realizar_checklist' => (isset($_POST['realizar_checklist']) ? 1 : 0),
                                    'gerenciar_checklist' => (isset($_POST['gerenciar_checklists']) ? 1 : 0),
                                    'gerenciar_recados' => (isset($_POST['gerenciar_recados']) ? 1 : 0),
                                    'gerenciar_notificacoes' => (isset($_POST['gerenciar_notificacoes']) ? 1 : 0),
                                    'administrador' => (isset($_POST['mais_usados_administrador']) ? 1 : 0)
                                    ]);
    header("Location: listar_perfis.php");

}

$dados = $objeto_perfil -> getDadosById($id);
$nome = $dados[0] ['nome'];
$gerenciar_perguntas = $dados[0] ['gerenciar_perguntas'];
$gerenciar_salas = $dados[0] ['gerenciar_salas'];
$realizar_acao_corretiva = $dados[0] ['realizar_acao_corretiva'];
$realizar_checklist = $dados[0] ['realizar_checklist'];
$gerenciar_checklist = $dados[0] ['gerenciar_checklist'];
$gerenciar_recados = $dados[0] ['gerenciar_recados'];
$gerenciar_notificacoes = $dados[0] ['gerenciar_notificacoes'];

include_once("../includes/menu.php"); 
require("../includes/main/main_editar_perfil.php");
require("../includes/footer/footer.php");
?>