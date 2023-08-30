<?php
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
require("../includes/header/header.php");
require("../includes/main/main_cadastrar_perfil.php");
//REGRAS DE NEGOCIO ABAIXO



//FIM DAS REGRAS DE NEGOCIO



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
       
        echo("   <script>
        
                Swal.fire({
                    title: 'Perfil alterado com sucesso!', //TITULO DO POP_UP DE ACORDO COM SUA TELA 
                    icon: 'success', // success, error e warning
                    confirmButtonColor: '#609437', // DEFINE A COR DO BOTÃO OK
                    confirmButtonText: 'OK'
                });
                
                </script>");
    sleep(2);
    header('Location: gerenc_perfis.php');
        //recarregando para a mesma pagina depois de cadastrar, futuramente: um popup ou modal
        
    } 
}

require("../includes/footer/footer.php");
?>