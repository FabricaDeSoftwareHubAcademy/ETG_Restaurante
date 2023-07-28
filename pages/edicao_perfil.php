<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro_perfil</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https/cdnjs.cloudflare.comlibs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/css/estilo_botoes_padronizados.css">
    <link rel="stylesheet" href="../assets/css/cadastro_perfil.css">
    
</head>

<body class="tela_cadastro_perfil">
    <main class="pai-de-todos">
        <?php
        //toma essa gambiarra ass luiz
        include_once("../includes/menu.php"); 
        ?>
    <div class="container">
        <div class="titulo_cad" >
            <h1 class="titulo_cad_perfil" >
                Edição de Perfil
            </h1>
        </div>
        <form method="POST" class="form_permissoes">
            <div class="input_group">
                <input type="input" class="input_field" placeholder="Name" name="nome_cargo">
                <label for="name" class="input_label">Nome</label> <!--Alterar para o nome do input-->
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Permissões da Sala:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Cadastrar Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="cadastrar_sala"  autocomplete="off"/>
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Edição de Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="editar_sala"  autocomplete="off" />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Remover Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="remover_sala"  autocomplete="off"/>
                    </div>
                </div>
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Permissões do Check-List:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Validar Check-List</label>
                        <input type="checkbox" class="checkbox_permissoes" name="validar_checklist"  autocomplete="off" />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Inserir Item</label>
                        <input type="checkbox" class="checkbox_permissoes" name="inserir_item_checklist"  autocomplete="off" />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Remover Item</label>
                        <input type="checkbox" class="checkbox_permissoes" name="remover_item_checklist"  autocomplete="off" />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Desbloquear Check-List</label>
                        <input type="checkbox" class="checkbox_permissoes" name="desbloquear_checklist"  autocomplete="off" />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Descrição de Não Conformidade</label>
                        <input type="checkbox" class="checkbox_permissoes" name="descricao_nao_conformidade"  autocomplete="off"/>
                    </div>
                </div>
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Permissões de Notificações:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Enviar Notificações</label>
                        <input type="checkbox" class="checkbox_permissoes" name="enviar_notificacao"  autocomplete="off"/>
                    </div>
                </div>
            </div>
            <div class="botoes">
                <!--Botão Voltar-->
                <div class="botao-padrao-voltar">
                    <a href="cadastro_perfil.php"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
                </div>
                <!--Botão Salvar-->
                <div class="botao-padrao-voltar">
                    <a href=""><input name="botao_salvar" type="submit" class="botao-salvar-submit"  value="SALVAR"></a>
                </div>
            </div>
        </form>
        
    </div>
</main>   
</body>
</html>