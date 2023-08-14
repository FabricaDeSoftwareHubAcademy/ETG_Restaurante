<?php
session_start();
if(!isset($_SESSION['num_matricula_logado'])){
 
    header('Location: ../');
}
include_once("../includes/menu.php");

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
    if ($objPerfil -> update($id)){
        
        //recarregando para a mesma pagina depois de cadastrar, futuramente: um popup ou modal
        // header('Location: cadastro_perfil.php');
    }
}

$dadosPerfil = new Perfil();
$dados = $dadosPerfil->getDadosById($id);
//print_r($dados);exit;
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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição  de perfil</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https/cdnjs.cloudflare.comlibs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- POP_UP -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>  -->

    <!-- <link rel="stylesheet" href="../assets/css/estilo_botoes_padronizados.css"> -->
    <link rel="stylesheet" href="../assets/css/cadastro_perfil.css">
    
</head>

<body class="tela_cadastro_perfil">
    <!-- <main class="pai-de-todos"> -->
        <?php
        //toma essa gambiarra ass luiz
        include_once("../includes/menu.php"); 
        // include_once("../modal/modal_verification.php");
        ?>
    <div class="container">
        <div class="titulo_cad" >
            <h1 class="titulo_cad_perfil" >
                Edição de Perfil
            </h1>
        </div>
        <form method="POST" class="form_permissoes">
            <div class="input_group">
                <input type="input" class="input_field" placeholder="Name" name="nome_cargo" value="<?=$dados[0]["nome_cargo"];?>" >
                <label for="name" class="input_label">Nome</label> <!--Alterar para o nome do input-->
            </div>

            <div class="permissoes_salas">
                <label class="titulo_permissoes">Permissões da Sala:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens"> 
                        <label class="label_permissao">Cadastrar Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="cadastrar_sala" <?php echo $cadastrar_salas == 1 ? "checked" : "";?>  />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Edição de Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="editar_sala"   <?php echo $editar_salas == 1 ? "checked" : "";?>  />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Remover Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="remover_sala"  <?php echo $remover_salas == 1 ? "checked" : "";?> />
                    </div>
                </div>
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Permissões do Check-List:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Validar Check-List</label>
                        <input type="checkbox" class="checkbox_permissoes" name="validar_checklist" <?php echo $validar_checklist == 1 ? "checked" : "" ?> />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Inserir Item</label>
                        <input type="checkbox" class="checkbox_permissoes" name="inserir_item_checklist" <?php echo $inserir_item_checklist ==1 ? "checked" : "" ?> />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Remover Item</label>
                        <input type="checkbox" class="checkbox_permissoes" name="remover_item_checklist" <?php echo $remover_item_checklist == 1 ? "checked" : "" ?> />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Desbloquear Check-List</label>
                        <input type="checkbox" class="checkbox_permissoes" name="desbloquear_checklist" <?php echo $desbloquear_checklist ==1 ? "checked" : "" ?> />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Descrição de Não Conformidade</label>
                        <input type="checkbox" class="checkbox_permissoes" name="descricao_nao_conformidade" <?php echo $descricao_nao_conformidade == 1 ? "checked" : "" ?> />
                    </div>
                </div>
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Permissões de Notificações:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Enviar Notificações</label>
                        <input type="checkbox" class="checkbox_permissoes" name="enviar_notificacao" <?php echo $enviar_notificacao == 1 ? "checked" : "" ?> />
                    </div>
                </div>
            </div>
            <div class="botoes">
                <!--Botão Voltar-->
                <div class="botao-padrao-voltar">
                    <a href="gerenc_perfis.php"class="botao-voltar-submit">VOLTAR</a>
                </div>
                <!--Botão Salvar-->
                <div class="botao-padrao-voltar">
                    <a href=""><input name="botao_salvar" type="submit" class="botao-salvar-submit"  value="SALVAR" ></a>
                </div>
            </div>
        </form>
        
    </div>
<!-- </main>    -->
</body>
</html>